<?php require('Header.php'); ?>        

    <center><h2 class="pop-titel">ADD NEW BOOKS</h2></center>

    <!--E - Book <button><a href="" class="button ">Choose file</a></button> <h6> No File Chosen </h6><br>-->
            

            <div>  

					<table class="pop-table Memdel">
                    <form  method="post">
                        <tr>
							<td>
								<label>Book Name</label>
                            </td>
                            <td colspan="3">
                                <input type="text" class="pop-retbar membar"  name="Book_Name" size="93" value="">
                            </td>
                        </tr>


                        <tr>
							<td>
								<label>Auther</label>
                            </td>
                            <td>
                                <input type="text" class="pop-retbar membar"  name="Author" size="30" value="">     
                            </td>

                            <td>
                                <label>ISBN</label>
                            </td>
                            <td>
                                <input type="text" class="pop-retbar membar"  name="" size="30" value="">
                            </td>
                        </tr>

                        <tr>
							<td>
								<label> Catagory</label>
                            </td>
                            <td>
                               <select name="book" class="pop-retbar membar" name="book">
									<option value="Dropdown">Dropdown</option>

								</select> 
                            </td>
                        
                            <td>
                                <label> Copies </label>
                            </td>
                            <td>
                                <input type="text" class="pop-retbar membar"  name="" size="30" value=""> 
                            </td>
                        </tr>
                        
                        
                        
                        <tr>
                            <td>
                                <label>Publisher</label> 
                            </td>
                            <td>
                                <input type="text" class="pop-retbar membar"  name="Publisher" size="30" value="">
                            </td>
                        
                            <td>
                                <label>Date</label>
                            </td>
                            <td>
								<input type="date" class="pop-retbar membar"> 
                            </td>
                        </tr>



                        <tr>
                            <td>
                                <label>Price</label>
                            </td>
                            <td>
                                <input type="text" class="pop-retbar membar"  name="" size="30" value="">
                            </td>
                        
                            <td>
                                <label>Published</label>
                            </td>
                            <td>
                                <input type="date" class="pop-retbar membar">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                            <form action="/action_page.php">
                                E-Book <input type="file" class="pop-retbar membar" id="myFile" name="filename" size="30" value="">
                             </form>
                            </td> 
                        </tr>
                    </table>

            </div>      
            
            <div class="Add_new_book_Button" >
                <input type="reset" id="Add_new_book_Button" name="Add_new_book_Button" p class="btn-pop mem btn-clear" value="Clear">
                <input type="button" id="Add_new_book_Button" name="Add_new_book_Button" p class="btn-pop mem btn-preview" value="Preview">
                <input type="submit" id="Add_new_book_Button" name="Add_new_book_Button" p class="btn-pop mem btn-S_C" value="Save & Print"> 
                 
                
                </form>
            </div>

        

        <footer>
            <div class="footer">
                <p><a href="#" class="footLink">E - book</a> | <a href="#" class="footLink">Reports</a> | <a href="#" class="footLink">Journals</a> | <a href="#" class="footLink">Library</a>Police</a> | <a href="#" class="footLink">Contact Us</a><br>Copyright SLIIT
                    &copy; 2021 - All right reserved</p>
            </div>
        </footer>


</body>
</html> 