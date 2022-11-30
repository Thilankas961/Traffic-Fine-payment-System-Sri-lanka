<?php require APPROOT . '/views/inc/header.php'; ?>
<h3 class="i-name">
    Driver Payment Details
</h3>
<div class="paymentsearch">
    <div class="search">

        <form action="/action_page.php" class="searchbar">
            <label for="cars">Search By</label>
            <select name="cars" id="cars">
                <option value="paid">Paid fine payment</option>
                <option value="overdue">Overdue fines</option>
                <option value="ongoing">Ongoing fines</option>
            </select>
            <input type="text" name="search" class="serchinput">
            <input type="submit" value="Search" class="searchbtn">
            <button class="pdf">Download PDF</button>
        </form>

    </div>
</div>
</div>
<div class="board">
    <table class="overview-table" width="100%">
        <thead>
            <td>Fine ID</td>
            <td>Vialation</td>
            <td>Payment status</td>
            <td>Points</td>
            <td>Amount</td>
        </thead>
        <tbody>

            <tr>
                <td>AAAA</td>
                <td>AAAAA</td>
                <td>AAAAAA</td>
                <td>AAAA</td>
                <td>AAAA</td>
            </tr>

        </tbody>
    </table>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>