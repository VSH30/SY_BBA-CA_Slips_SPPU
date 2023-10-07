<?php
class employee
{
	public $code,$name,$designation;
	
	public function createemp($code,$name,$designation)
	{
		$this->code = $code;
		$this->name = $name;
		$this->designation = $designation;
	}
}
class emp_account extends employee
{
	public $account_no,$joining_date;
	
	public function createacc($account_no,$joining_date)
	{
		$this->account_no = $account_no;
		$this->joining_date = $joining_date;
	}
}
class emp_sal extends emp_account
{
	public $basic_pay,$earnings,$deduction;
	
	public function __construct($code,$name,$designation,$account_no,$joining_date,$basic_pay,$earnings,$deduction)
	{
		parent::createemp($code,$name,$designation);
		parent::createacc($account_no,$joining_date);
		$this->basic_pay = $basic_pay;
		$this->earnings = $earnings;
		$this->deduction = $deduction;
	}
	
	public function getrow()
	{
		echo "<tr align=center><td>".$this->code."</td><td>".$this->name."</td><td>".$this->designation."</td><td>".$this->account_no."</td><td>".$this->joining_date."</td><td>".$this->basic_pay."</td><td>".$this->earnings."</td><td>".$this->deduction."</td></tr>";
	}
	
	public function sal()
	{
		return($this->basic_pay + $this->earnings - $this->deduction);
	}
}

$employee[0] = new emp_sal(103,"VSH","Peon",777,2003,90000,120000,10000);	
$employee[1] = new emp_sal(104,"Rohit","CEO",1010,2001,300000,400000,50000);
$employee[2] = new emp_sal(101,"Adnan","Manager",3232,2001,200000,300000,35000);
$employee[3] = new emp_sal(102,"Siddesh","CTO",8768,2002,150000,250000,20000);

function mtable($arr)  //FUNCTION FOR MASTER TABLE
{
	echo "<table border=2 cellpadding=5px>";
	echo "<tr><th>Code</th><th>Name</th><th>Designation</th><th>Account No</th><th>Joining Date</th><th>Basic Pay</th><th>Earnings</th><th>Deduction</th></tr>";
	for($i=0;$i<count($arr);$i++)
	{
		$arr[$i]->getrow();
	}
echo "</table>";
}

mtable($employee); //NORMAL TABLE

echo "<br><br><br><b>Sorted TABLE:</b><br><br>";
for($i=0;$i<count($employee);$i++)
{
	$x[$i] = $employee[$i]->code;
}
sort($x);
for($i=0;$i<count($employee);$i++)
{
	for($j=0;$j<count($employee);$j++)
	{
		if($x[$i]==$employee[$j]->code)
			$sortedemp[$i]=$employee[$j];
	}
}
mtable($sortedemp);  //SORTED TABLE

echo "<br><br><br><b>Salary TABLE:</b><br><br>";
for($i=0;$i<count($employee);$i++)
{
	echo "<br>Salary of ".$employee[$i]->name." = ".$employee[$i]->sal(); //SALARY OF EMPLOYEES
}
?>