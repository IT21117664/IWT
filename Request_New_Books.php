<?php require('Header.php'); ?>

    <center><h2 p class="pop-titel">REQUEST NEW BOOKS</h2></center>

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
                        </tr>
                        
                        <tr>
                            <td>
                                <label>Publisher</label> 
                            </td>
                            <td>
                                <input type="text" class="pop-retbar membar"  name="Publisher" size="30" value="">
                            </td>
                        </tr>

                        <tr>
                            <td>
                            E-Book <input type="radio" name="yes" checked>Yes</input> <input type="radio" name="no">No</input>
                            </td>
                        </tr>

            <div class="Request_New_Book_Button">
            <input type="reset" id="Request_New_Book_Button" name="Request_New_Book_Button" p class="btn-pop mem btn-clear" value="Clear">
            <input type="submit" id="Request_New_Book_Button" name="Request_New_Book_Button" p class="btn-pop mem btn-pop mem" value="Request">
            
            </div>



    

     

</body>
</html>