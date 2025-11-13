$excel = New-Object -ComObject Excel.Application
$excel.Visible = $false
$workbook = $excel.Workbooks.Open('c:\Users\marco\Documents\GitHub\sito-locanda\Ordine PupdPuglia ed 11-25 def.xlsx')
$sheet = $workbook.Sheets(1)
$usedRange = $sheet.UsedRange
$rows = $usedRange.Rows.Count
$cols = $usedRange.Columns.Count

Write-Output "Rows: $rows, Columns: $cols"
Write-Output "---"

for ($r = 1; $r -le [Math]::Min($rows, 25); $r++) {
  $row = @()
  for ($c = 1; $c -le $cols; $c++) {
    $cell = $sheet.Cells($r, $c).Value()
    $row += $cell
  }
  Write-Output ($row -join " | ")
}

$workbook.Close()
$excel.Quit()
