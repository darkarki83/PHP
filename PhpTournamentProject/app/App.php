<?php

class App {
    // Function to read and process CSV files
    public static function processCSVFiles()
    {
        $transactionData = []; // Array to store processed data

        $directory = '../transaction_files'; // Directory containing CSV files

        // Get list of CSV files in the directory
        $csvFiles = glob($directory . '/*.csv');

        foreach ($csvFiles as $file) {
            $handle = fopen($file, 'r'); // Open the CSV file
            
            if ($handle !== false) {
                while (($data = fgetcsv($handle)) !== false) {
                    // Process each row of data
                    $date = $data[0];
                    $check = $data[1];
                    $description = $data[2];
                    $amount = str_replace(['$', '(', ')'], '', $data[3]);

                    // Convert date to desired format (Jan 4, 2021)
                    $formattedDate = date('M j, Y', strtotime($date));

                    // Store processed data in array
                    $transactionData[] = [
                        'date' => $formattedDate,
                        'check' => $check,
                        'description' => $description,
                        'amount' => (float) $amount,
                    ];
                }

                fclose($handle); // Close the CSV file
            } else {
                echo "Failed to open file: $file" . PHP_EOL;
            }
        }

        return $transactionData;
    }

    // Function to calculate total income, total expense, and net total
    public static function calculateTotals($transactions) {
        $totalIncome = 0;
        $totalExpense = 0;

        foreach ($transactions as $transaction) {
            $amount = $transaction['amount'];
            if ($amount >= 0) {
                $totalIncome += $amount;
            } else {
                $totalExpense += abs($amount);
            }
        }

        $netTotal = $totalIncome - $totalExpense;

        return [
            'totalIncome' => $totalIncome,
            'totalExpense' => $totalExpense,
            'netTotal' => $netTotal
        ];
    }
}

// Now you have the processed CSV data in $transactions and calculated totals in $totals

?>


