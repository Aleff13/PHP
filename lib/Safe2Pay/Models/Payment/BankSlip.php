<?php

namespace Safe2Pay\Models;

/**
 * Class BankSlip
 *
 * @package Safe2Pay\Models
 */
class BankSlip  implements \JsonSerializable
{
    private $Id;
    private $IdCarnet;
    private $IdTransaction;
    private $SeedNumber;
    private $BankSlipNumber;
    private $DigitableLine;
    private $Barcode;
    private $File;
    private $AmountPayment;
    private $DueDate;
    private $Instruction;
    private $Message;
    private $PenaltyRate;
    private $InterestRate;
    private $BankSplipUrl;
    private $CancelAfterDue;
    private $IsEnablePartialPayment;
    private $DaysBeforeCancel;
    private $IdMerchant;

    public function getId(){
		return $this->Id;
	}

	public function setId($Id){
		$this->Id = $Id;
	}

	public function getIdCarnet(){
		return $this->IdCarnet;
	}

	public function setIdCarnet($IdCarnet){
		$this->IdCarnet = $IdCarnet;
	}

	public function getIdTransaction(){
		return $this->IdTransaction;
	}

	public function setIdTransaction($IdTransaction){
		$this->IdTransaction = $IdTransaction;
	}

	public function getSeedNumber(){
		return $this->SeedNumber;
	}

	public function setSeedNumber($SeedNumber){
		$this->SeedNumber = $SeedNumber;
	}

	public function getBankSlipNumber(){
		return $this->BankSlipNumber;
	}

	public function setBankSlipNumber($BankSlipNumber){
		$this->BankSlipNumber = $BankSlipNumber;
	}

	public function getDigitableLine(){
		return $this->DigitableLine;
	}

	public function setDigitableLine($DigitableLine){
		$this->DigitableLine = $DigitableLine;
	}

	public function getBarcode(){
		return $this->Barcode;
	}

	public function setBarcode($Barcode){
		$this->Barcode = $Barcode;
	}

	public function getFile(){
		return $this->File;
	}

	public function setFile($File){
		$this->File = $File;
	}

	public function getAmountPayment(){
		return $this->AmountPayment;
	}

	public function setAmountPayment($AmountPayment){
		$this->AmountPayment = $AmountPayment;
	}

	public function getDueDate(){
		return $this->DueDate;
	}

	public function setDueDate($DueDate){
		$this->DueDate = $DueDate;
	}

	public function getInstruction(){
		return $this->Instruction;
	}

	public function setInstruction($Instruction){
		$this->Instruction = $Instruction;
	}

	public function getMessage(){
		return $this->Message;
	}

	public function setMessage($Message){
		$this->Message = $Message;
	}

	public function getPenaltyRate(){
		return $this->PenaltyRate;
	}

	public function setPenaltyRate($PenaltyRate){
		$this->PenaltyRate = $PenaltyRate;
	}

	public function getInterestRate(){
		return $this->InterestRate;
	}

	public function setInterestRate($InterestRate){
		$this->InterestRate = $InterestRate;
	}

	public function getBankSplipUrl(){
		return $this->BankSplipUrl;
	}

	public function setBankSplipUrl($BankSplipUrl){
		$this->BankSplipUrl = $BankSplipUrl;
	}

	public function getCancelAfterDue(){
		return $this->CancelAfterDue;
	}

	public function setCancelAfterDue($CancelAfterDue){
		$this->CancelAfterDue = $CancelAfterDue;
	}

	public function getIsEnablePartialPayment(){
		return $this->IsEnablePartialPayment;
	}

	public function setIsEnablePartialPayment($IsEnablePartialPayment){
		$this->IsEnablePartialPayment = $IsEnablePartialPayment;
	}

	public function getDaysBeforeCancel(){
		return $this->DaysBeforeCancel;
	}

	public function setDaysBeforeCancel($DaysBeforeCancel){
		$this->DaysBeforeCancel = $DaysBeforeCancel;
	}

	public function getIdMerchant(){
		return $this->IdMerchant;
	}

	public function setIdMerchant($IdMerchant){
		$this->IdMerchant = $IdMerchant;
	}

	public function __construct($DueDate,$CancelAfterDue, $IsEnablePartialPayment ,$PenaltyRate,$InterestRate, $Instruction,$Message)
	{
		$this->DueDate = $DueDate;
		$this->CancelAfterDue = $CancelAfterDue;
		$this->IsEnablePartialPayment = $IsEnablePartialPayment;
		$this->PenaltyRate = $PenaltyRate;
		$this->InterestRate = $InterestRate;
		$this->Instruction = $Instruction;
		$this->Message = $Message;
	}

	public function jsonSerialize()
    {
        return 
        [
            "DueDate"   => $this->DueDate,
            "CancelAfterDue" => $this->CancelAfterDue,
            "IsEnablePartialPayment"   => $this->IsEnablePartialPayment,
            "PenaltyRate"   => $this->PenaltyRate,
			"InterestRate" => $this->InterestRate,
			"Instruction" => $this->Instruction,
			"Message" => $this->Message
        ];
    }

}

?>