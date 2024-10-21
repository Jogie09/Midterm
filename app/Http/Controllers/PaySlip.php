<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;

class PaySlip extends Controller
{
    public static function print(Request $request) {
        $fpdf = new Fpdf('P', 'mm', 'A4');
        $fpdf->AddPage();

        $fpdf->SetFont('Arial', 'B', 16);

        $fpdf->Cell(0, 10, 'Seven Evelyn', 0, 1, 'C');

        $fpdf->SetFont('Arial', '', 14);
        $fpdf->Cell(0, 10, 'Pay Slip', 0, 1, 'C');


         
        $fpdf->Ln(10);
        $fpdf->Ln(10);

        $fpdf->Ln(10);
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Cell(50, 10, 'Employee Name:', 0, 0);
        $fpdf->Cell(50, 10, 'John Paul', 0, 1);

        $fpdf->Cell(50, 10, 'Employee ID:', 0, 0);
        $fpdf->Cell(50, 10, '12727', 0, 1);

        $fpdf->Cell(50, 10, 'Department:', 0, 0);
        $fpdf->Cell(50, 10, 'Finance', 0, 1);
        $fpdf->Cell(50, 10, 'Designation:', 0, 0);
        $fpdf->Cell(50, 10, 'Designation:', 0, 0);

        $fpdf->Ln(10);
        $fpdf->SetFont('Arial', 'B', 12);
        $fpdf->Cell(0, 10, 'Salary Details', 0, 1);

        $fpdf->SetFont('Arial', 'B', 12);
        $fpdf->Cell(95, 10, 'Earnings', 1, 0, 'C');
        $fpdf->Cell(95, 10, 'Deductions', 1, 1, 'C');

        $fpdf->SetFont('Arial', '', 12);

        $fpdf->Cell(95, 10, 'Basic Salary: $3000', 1, 0);
        $fpdf->Cell(95, 10, 'Tax: $200', 1, 1);
        $fpdf->Cell(95, 10, 'House Allowance: $500', 1, 0);
        $fpdf->Cell(95, 10, 'Pension: $100', 1, 1);

        $fpdf->Cell(95, 10, 'Transport Allowance: $200', 1, 0);
        $fpdf->Cell(95, 10, 'Other Deductions: $50', 1, 1);

        $fpdf->Ln(10);

        $fpdf->SetFont('Arial', 'B', 12);
        $fpdf->Cell(95, 10, 'Total Earnings: $3700', 1, 0);
        $fpdf->Cell(95, 10, 'Total Deductions: $350', 1, 1);

        $fpdf->SetFont('Arial', 'B', 14);
        $fpdf->Cell(0, 10, 'Net Salary: $3350', 0, 1, 'R');

        $fpdf->Ln(10);

        $fpdf->SetFont('Arial', 'I', 10);
        $fpdf->Cell(0, 10, 'This is a computer-generated payslip and does not require a signature.', 0, 1, 'C');


        $fpdf->SetFont('Courier', 'B', 18);
        $fpdf->Cell(50, 8, '');

        $fpdf->SetFont('Courier', 'B', 18);
        $fpdf->Output();
        exit;
    }
}
