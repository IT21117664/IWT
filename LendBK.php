<?php
include 'header.php';

?>

<div class="pop-lend">
        <div class="pop-content">
         <div class="pop-close1"><b>+</b></div>
            <!---------------------------LEND_BOOK_HTML_START------------------------------------------------------------------------------------------------->
            <div>
                <div>
                    <h2 class="pop-titel">LEND BOOK</h2>
                    <div class="pop-topic">
                        <h3><u>Book Details</u></h3>
                        <center>
                            <form action="index.php" method="post">
                                <input type="text" class="pop-search" name="Lend_Book_Book_Find_Id" placeholder="Search by Code No" size="50" required>
                                <input type="submit" id="Lend_Book_Book_Find_Submit" name="Lend_Book_Book_Find_Submit" class="btn-search" value="Search">
                            </form>
                        </center>
                        <div class="Container">
                            <div class="imgDB">
                                <img src="123.gif" alt="DB Pic" width="120px" height="170px">
                            </div>
                            <div>
                                <table class="pop-table LendBK">
                                    <form>
                                        <tr>
                                            <td>
                                                <label>Book Name</label>
                                            </td>
                                            <td>
                                                <input type="text"  class="Lend_Book_Tabel_Name" class="pop-retbar lendbar" placeholder="Book Name" size="30" readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Author</label>
                                            </td>
                                            <td>
                                                <input type="text"  class="Lend_Book_Tabel_Author" class="pop-retbar lendbar" placeholder="Book's Author" size="30" readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>ISBN No</label>
                                            </td>
                                            <td>
                                                <input type="text"  class="Lend_Book_Tabel_ISBN" class="pop-retbar lendbar" placeholder="Book's ISBN" size="30" readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Code No</label>
                                            </td>
                                            <td>
                                                <input type="text"  class="Lend_Book_Tabel_Code" class="pop-retbar lendbar" placeholder="Book's Code" size="30" readonly>
                                            </td>
                                        </tr>
                                    </form>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <!-----------------------------Member Details----------------------------------------------------------------------------------------------->
                <div>
                    <div class="pop-topic">
                        <h3><u>Member Details</u></h3>
                        <center>
                            <form>
                                <input type="text" class="pop-search" name="Lend_Book_Member_Find_Id" placeholder="Reg No / NIC" size="50" required>
                                <input type="submit" id="Lend_Book_Member_Find_Submit" name="Lend_Book_Member_Find_Submit" class="btn-search" value="Search">
                            </form>
                        </center>
                    </div>
                    <div>
                        <table class="pop-table LendMem">
                            <form>
                                <tr>
                                    <td>
                                        <Label>First Name</Label>
                                    </td>
                                    <td>
                                        <input type="text"  name="Lend_Book_Member_Table_Fname" class="pop-retbar membar" readonly>
                                    </td>
                                    <td>
                                        <Label>Last Name</Label>
                                    </td>
                                    <td>
                                        <input type="text"  name="Lend_Book_Member_Table_Fname" class="pop-retbar membar" readonly>
                                    </td>
                                </tr>

                                <br> <br>
                                <tr>
                                    <td>
                                    <Label>Reg No</Label>
                                    </td>
                                    <td>
                                    <input type="text" name="Lend_Book_Member_Table_RegNo" class="pop-retbar membar" readonly>
                                    </td>
                                    <td>
                                    <Label>Email</Label>
                                    </td>
                                    <td>
                                    <input type=" email"  name="Lend_Book_Member_Table_Email" class="pop-retbar membar" readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <Label>Lend Date</Label>
                                    </td>
                                    <td><input type="date" id="Lend_Book_Member_Table_LendDate"  name="Lend_Book_Member_Table_LendDate" class="pop-retbar membar" value="Today"  readonly></td>
                                    <td>
                                    <Label>Due Date</Label>
                                    </td>
                                    <td><input type="date" id="Lend_Book_Member_Table_DueDate"  name="Lend_Book_Member_Table_DueDate" class="pop-retbar membar" min="Today" required></td>
                                </tr>
                                
                            </form>
                        </table>

                    </div>
                </div>

                <!-----------------------------Lend Button----------------------------------------------------------------------------------------------->

                <div>
                    <input type="submit" id="lend_button" name="lend_button" class="btn-pop popLend" value="Lend">
                </div>
            </div>
            <!---------------------------LEND_BOOK_HTML_END------------------------------------------------------------------------------------------------->
        </div>
</div>

</body>
</html>