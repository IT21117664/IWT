<?php require('Header.php'); ?>

    <div class="nav">
        <ul>
            <li><a class="logoL">Library</a></li>
            <li><a href="#news">Home</a></li>
            <li><a href="#contact">Articles</a></li>
            <li><a href="#about">Past Papers</a></li>
            <li><a href="#about">Reports</a></li>
            <li><a href="#about">Journals</a></li>
            <li><a href="#about" >Admin</a></li>
        </ul>
    </div>

    <div class="row">

        <div class="right">
            <button type="button" class="btn primary">Overrides</button>
            <i class="far fa-envelope fa-2x"></i>
        </div>
    </div>
    
    <div class="row">
        <div class="column side"></div>
        <div class="column middle">
            <a href="#" target="blank" id="lendBk" class="btn danger btn-lg">Lend Book</a>
            <button type="button" id="retriveBk" class="btn warning btn-lg">Retrive Book</button>
        </div>
    </div>

    <div class="row">
        <div class="column">
            <h3 align="left">Member</h3>
            <input type="button" id="nmVal" value="New Member Validation" class="btn border colorprimary">
            <input type="button" id="" value="Add Memeber" class="btn border colorprimary">
            <input type="button" id="memDel" value="Member Details" class="btn border colorprimary">
        </div>
    </div>

    <div class="row">
        <div class="column">
            <h3 align="left">Books</h3>
            <input type="button" value="Add New Books" class="btn border colorprimary">
            <input type="button" value="Book Detail" class="btn border colorprimary">
            <input type="button" value="Request New Books" class="btn border colorprimary">
        </div>
    </div>

    <div class="row">
        <div class="column">
            <h3 align="left">IT Technician</h3>
            <input type="button" value="Error Submission" class="btn border colorprimary">
            <input type="button" value="Contact Detail" class="btn border colorprimary">
        </div>
    </div>

    <div class="footer">
        <p>E - book | Reports | Journals | Library Police | Contact Us<br>Copyright SLIIT &copy; 2021 - All right reserved</p>
    </div>
    <script> carousel();</script>

<!----- KN---------->
<div class="pop-all">

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

<div class="pop-memberDel">
    <div class="pop-content memContent">
      <div class="pop-close3"><b>+</b></div>
            <!----------------------------------Member_Details_HTML_START------------------------------------------------------------------------------------------>

            <div>
                <h3 class="pop-titel">Member Details</h3>
                <!----------------------------------Member_Details_HTML_Find------------------------------------------------------------------------------------------>

                <div>
                   <center>
                   <form>
                        <input type="text" class="pop-search" name="Member_Details_Find_Id" size="25" placeholder="Reg No / NIC" required>
                        <input type="submit" id="Member_Details_Find_Submit" name="Member_Details_Find_Submit" class="btn-search" value="Search">
                    </form>
                   </center> 
                </div>

                <br>
                <hr>
                <br>
                <!----------------------------------Member_Details_HTML_Details------------------------------------------------------------------------------------------>

                <div>
                    <table class="pop-table Memdel">
                        <form action="#" method="post">
                            <tr>
                                <td>
                                    <label>First Name</label>
                                </td>
                                <td>
                                    <input type="text" class="pop-retbar membar"  name="Member_Details_Table_Fname" size="30">
                                </td>
                                <td>
                                    <label>Last Name</label>
                                </td>
                                <td>
                                    <input type="text" class="pop-retbar membar"  name="Member_Details_Table_Lname" size="26">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Address</label>
                                </td>
                                <td colspan="3">
                                    <input type="text" class="pop-retbar membar"  name="Member_Details_Table_Address" size="93">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Reg No</label>
                                </td>
                                <td>
                                    <input type="text" class="pop-retbar membar"  name="Member_Details_Table_RegNo" size="30">
                                </td>
                                <td>
                                    <label>SLIIT Email</label>
                                </td>
                                <td>
                                    <input type="email" class="pop-retbar membar"  name="Member_Details_Table_Email" size="27">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>NIC</label>
                                </td>
                                <td>
                                    <input type="text" class="pop-retbar membar"  name="Member_Details_Table_NIC" size="30">
                                </td>
                                <td>
                                    <label>Mobile</label>
                                </td>
                                <td>
                                    <input type="tel" class="pop-retbar membar"  name="Member_Details_Table_MobNo" size="27">
                                </td>
                            </tr>
                        
                    </table>

                </div>

                <br>
                <!----------------------------------Member_Details_HTML_Buttons------------------------------------------------------------------------------------------>

                <div class="Member_Details_Button">
    
                        <input type="reset" id="Member_Details_Button_Clear" name="Member_Details_Button_Clear"  class="btn-pop mem btn-clear" value="Clear">
                        <input type="submit" id="Member_Details_Button_Update" name="Member_Details_Button_Clear"  class="btn-pop mem btn-update" value="Update">
                        <input type="submit" id="Member_Details_Button_Remove" name="Member_Details_Button_Clear"  class="btn-pop mem btn-remove" value="Remove">
                    </form>

                </div>

            </div>
            <!----------------------------------Member_Details_HTML_END------------------------------------------------------------------------------------------>


    </div>
</div>

<div class="pop-memberVal">
    <div class="pop-content memvalContent">
        <div class="pop-close4"><b>+</b></div>
            <div>
                <h2 class="pop-titel">New Member Validation</h2>
                    <div>
                        <table class="pop-table memberval">
                            <form>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Reg No</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Names</td>
                                    <td>ITXXX</td>
                                    <td>
                                    <input type="submit" id="Member_Validation_Table_Reject" name="Member_Validation_Table_Reject" class="btn-pop mem btn-reject" value="Reject">
                                    <input type="submit" id="Member_Validation_Table_Confirm" name="Member_Validation_Table_Confirm" class="btn-pop mem btn-confirm" value="Confirm">
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Names</td>
                                    <td>ITXXX</td>
                                    <td>
                                    <input type="submit" id="Member_Validation_Table_Reject" name="Member_Validation_Table_Reject" class="btn-pop mem btn-reject" value="Reject">
                                    <input type="submit" id="Member_Validation_Table_Confirm" name="Member_Validation_Table_Confirm" class="btn-pop mem btn-confirm" value="Confirm">
                                    </td>
                                </tr>
                            </form>
                        </table>
            </div>
        </div>
    </div>
</div>

</div>
<script>popup();</script>
</body>
</html>