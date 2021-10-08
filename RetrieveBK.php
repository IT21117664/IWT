<?php
include 'Header.php'
?>

<div class="pop-retrive">
    <div class="pop-content">
            <div class="pop-close2"><b>+</b></div>
            <!----------------------------------RETRIEVE_BOOK_HTML_START------------------------------------------------------------------------------------------>

            <div>
                <h2 class="pop-titel">RETRIEVE BOOK</h2>
                <!---------------------------Studnet Details - Lended ------------------------------------------------------------------------------------------------->
                <div>
                    <div class="pop-topic">
                        <h3><u>Member Details</u></h3>
                        <center>
                            <form>
                                <input type="text" name="Retrieve_Book_Member_Find_Id" class="pop-search" placeholder="Reg No / NIC" size="50" required>
                                <input type="submit" id="Retrieve_Book_Member_Find_Submit" name="Retrieve_Book_Member_Find_Submit" class="btn-search"  value="Search">
                            </form>
                        </center>
                    </div>
                    <div>
                        <table class="pop-table RetrieveMem">
                            <form>
                                <tr>
                                    <td>
                                        <Label>First Name</Label>
                                    </td>
                                    <td>
                                        <input type="text" name="Retrieve_Book_Table_Fname" class="pop-retbar membar"  readonly>
                                    </td>
                                    <td>
                                        <Label>Last Name</Label>
                                    </td>
                                    <td>
                                        <input type="text" name="Retrieve_Book_Table_Lname" class="pop-retbar membar"  readonly>
                                    </td>
                                </tr>

                                <br> <br>

                                <td>
                                    <Label>Reg No</Label>
                                </td>
                                <td>
                                    <input type="text"  name="Retrieve_Book_Table_RegNo readonly" class="pop-retbar membar"  readonly>
                                </td>
                                <td>
                                    <Label>Email</Label>
                                </td>
                                <td>
                                    <input type=" email" name="Retrieve_Book_Table_Email" class="pop-retbar membar"  readonly>
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                        <Label>Lend Date</Label>
                                    </td>
                                    <td><input type="date" class="pop-retbar membar"  id="Retrieve_Book_Table_LendDate" name="Retrieve_Book_Table_LendDate" value="Today" autocomplete="" readonly></td>
                                    <td>
                                        <Label>Date</Label>
                                    </td>
                                    <td><input type="date" class="pop-retbar membar"  id="Retrieve_Book_Table_DueDate" name="Retrieve_Book_Table_DueDate" value="Today" readonly></td>
                                </tr>


                            </form>
                        </table>

                    </div>
                </div>
                <br><br>
                <!---------------------------Book Details - Lended By Student ------------------------------------------------------------------------------------------------->
                <div>
                    <h3 class="pop-topic"><u>Book Details</u></h3><br
                    <div>
                        <table class="pop-table RetrieveBK">
                            <tr>
                                <th>#</th>
                                <th>Book Name</th>
                                <th>Code Name</th>
                                <th>Due Date</th>
                                <th>Retrieve</th>
                            </tr>
                            <tr>
                                <td>xxx</td>
                                <td>xxx</td>
                                <td>xxx</td>
                                <td>xxx</td>
                                <td><input type="checkbox" id="Retrieve_Book_Table_Report_Status" name="Retrieve_Book_Table_Report_Status"></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!-----------------------------Retrieve Button----------------------------------------------------------------------------------------------->

                <div>
                    <input type="submit" id="retrieve_button" name="retrieve_button" class="btn-pop" value="Retrieve">
                </div>

            </div>

            <!----------------------------------RETRIEVE_BOOK_HTML_END------------------------------------------------------------------------------------------>
    </div>
</div>

</body>
</html>
