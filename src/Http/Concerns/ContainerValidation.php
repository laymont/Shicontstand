<?php

namespace Laymont\Shicontstand\Http\Concerns;

use Illuminate\Support\Arr;

class ContainerValidation
{
    protected string $number;

    protected string $owner;

    protected string $serial;

    protected int $digitValidator;

    protected string $pattern = '/([A-Z]{3})(U)([\d]{7})/';

    protected mixed $stepOne;

    protected mixed $stepTwo;

    public function __construct()
    {
        $this->stepOne = config('shicontstand.calculation_step_one');
        $this->stepTwo = config('shicontstand.calculation_step_two');
    }

    private function runCalculation(): array
    {
        $number = $this->getNumber();
        $serial = str_split(substr($number, 0, 10));
        $stepOne = $this->stepOne;
        $stepTwo = $this->stepTwo;

        /**matrix to save values */
        $collect = collect();

        /**character to int */
        for ($i = 0; $i < 4; $i++) {
            $arr = Arr::first($stepOne, function ($value, $key) use ($i, $serial) {
                return $value['character'] == $serial[$i];
            });

            $collect->push(Arr::get($arr, 'value'));
        }

        /**number of serial */
        for ($i = 4; $i < 10; $i++) {
            $collect->push((int) $serial[$i]);
        }

        /**Calculate */
        $toCalculate = collect();
        $serialArr = $collect->toArray();
        for ($i = 0; $i < 10; $i++) {
            $toCalculate->push($serialArr[$i] * $stepTwo[$i]);
        }

        $sum = $toCalculate->reduce(fn ($num, $item) => $num + $item);
        $division = $sum / 11;
        $withOutDecimal = (int) $division;
        $multiply = $withOutDecimal * 11;

        $digitValidator = $sum - $multiply;
        if ($digitValidator == 10) {
            $digit = 0;
        } else {
            $digit = $digitValidator;
        }

        $submittedDigit = $this->getDigitValidator();

        return [
            'is_valid' => $submittedDigit == $digit,
            'digit_validator' => $digit,
        ];
    }

    public function runDecompose(): array
    {
        $number = $this->getNumber();
        if (preg_match($this->pattern, $number)) {
            $owner = substr($number, 0, 3);
            $category = substr($number, 3, 1);
            $serial = substr($number, 4, 6);
            $digitValidator = substr($number, -1);

            $this->setOwner($owner);
            $this->setSerial($serial);
            $this->setDigitValidator($digitValidator);

            return [
                'is_container' => substr($number, 3, 1) === 'U',
                'owner' => $owner,
                'category' => $category,
                'serial' => $serial,
                'digit_validations' => $this->runCalculation(),
            ];
        } else {
            return [
                'is_container' => false,
                'owner' => null,
                'category' => null,
                'serial' => null,
                'digit_validator' => null,
                'digit_validations' => false,
            ];
        }
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * @param  string  $number
     * @return array
     */
    public function setNumber(string $number): array
    {
        $this->number = strtoupper($number);

        return $this->runDecompose();
    }

    /**
     * @return string
     */
    public function getOwner(): string
    {
        return $this->owner;
    }

    /**
     * @param  string  $owner
     */
    public function setOwner(string $owner): void
    {
        $this->owner = $owner;
    }

    /**
     * @return string
     */
    public function getSerial(): string
    {
        return $this->serial;
    }

    /**
     * @param  string  $serial
     */
    public function setSerial(string $serial): void
    {
        $this->serial = $serial;
    }

    /**
     * @return int
     */
    public function getDigitValidator(): int
    {
        return $this->digitValidator;
    }

    /**
     * @param  int  $digitValidator
     */
    public function setDigitValidator(int $digitValidator): void
    {
        $this->digitValidator = $digitValidator;
    }
}
