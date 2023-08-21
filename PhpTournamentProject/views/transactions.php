<!DOCTYPE html>
<html>
<head>
    <title>Transactions</title>
    <style>
        .income {
            color: green;
        }
        .expense {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Transactions</h1>
    <table border="1">
        <tr>
            <th>Date</th>
            <th>Check #</th>
            <th>Description</th>
            <th>Amount</th>
        </tr>
        <?php foreach ($transactions as $transaction): ?>
            <tr>
                <td><?= $transaction['date'] ?></td>
                <td><?= htmlspecialchars($transaction['check']) ?></td>
                <td><?= htmlspecialchars($transaction['description']) ?></td>
                <td class="<?= ($transaction['amount'] >= 0) ? 'income' : 'expense' ?>">
                    <?= ($transaction['amount'] >= 0) ? '+' : '' ?>
                    <?= number_format($transaction['amount'], 2) ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </ul>
    <h2>Totals</h2>
    <p>Total Income: <span class="income"><?= number_format($totals['totalIncome'], 2) ?></span></p>
    <p>Total Expense: <span class="expense"><?= number_format($totals['totalExpense'], 2) ?></span></p>
    <p>Net Total: <?= number_format($totals['netTotal'], 2) ?></p>
    <p>Net : <?= number_format($totals['netTotal'], 2) ?></p>
</body>
</html>
