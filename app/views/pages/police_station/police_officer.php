<?php require APPROOT . '/views/inc/header.php'; ?>
<h3 class="i-name">
    Station Police Officer's Details
</h3>
<div class="paymentsearch">
    <div class="search">

        <form action="/action_page.php" class="searchbar">
            <label>Search By</label>
            <select name="officer" id="cars">
                <option value="name">Name</option>
                <option value="Id">ID</option>
            </select>
            <input type="text" name="search" class="serchinput">
            <input type="submit" value="Search" class="searchbtn">
            <a href="./ps_add_police_officer.php">
                <div class="add_po">Add police Officer</div>
            </a>
            <button class="pdf">Download PDF</button>
        </form>

    </div>
</div>
</div>
<div class="board">
    <table class="overview-table" width="100%">
        <thead>
            <td>Police Officer Id</td>
            <td>Name</td>
            <td>Phone no</td>
            <td>Address</td>
            <td>email</td>
            <td>Temp password</td>
            <td>Action</td>
        </thead>
        <tbody>
            <tr>
                <td>AAA</td>
                <td>AAA</td>
                <td>AAA</td>
                <td>AAA</td>
                <td>AAA</td>
                <td>AAA</td>
                <td>AAA</td>
            </tr>
        </tbody>
    </table>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>