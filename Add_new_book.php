<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>`
    <link rel="stylesheet" href="css/main.css">
    <script src="./js/main.js" type="text/javascript"></script>
</head>
<body>


    <center><h2>ADD NEW BOOKS</h2></center>
    Book Name <input type="text" id="book name" name="book name" class="txt long"><br>

    

        <form action="">
            Author <input type="text" placeholder="Author">
            ISBN <input type="text" placeholder="ISBN"><br>
            Category <select name="book" id="book">
                <option value="Dropdown">Dropdown</option>
             </select>
            copies <input type="text"><br>
            publisher <input type="text">      
            Date <input type="date"><br>
            price <input type="text">
            Published <input type="date"><br><br>

            <!--E - Book <button><a href="" class="button ">Choose file</a></button> <h6> No File Chosen </h6><br>-->
            E - Book <input type="file"><br><br>

            <button type="submit" p class="alignright">Clear</button>
            <button type="submit" p class="alignright">Preview</button>
            <button type="submit" p class="alignright">Save & Print</button>

    <div class="Add_new_book_table">  
    <table style="width: 100%">
            <tr>
                <td valign="top">
					<table>
                        <tr>
							<td>
								<label>Book Name</label>
                            </td>
                            <td>
                                <input type="text" id="book name" name="book name" class="txt long">
                            </td>
                        </tr>
                        <tr>
							<td>
								<label>Auther</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Author">  
                            </td>
                        </tr>
                        <tr>
							<td>
								<label> Catagory</label>
                            </td>
                            <td>
                               <select name="book" id="book">
									<option value="Dropdown">Dropdown</option>
								</select> 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Publisher</label> 
                            </td>
                            <td>
                                <input type="text" placeholder="Publisher">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Price</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Price">
                            </td>
                        </tr>
                    </table>
				</td>

                <td>
                    <table style="float: right" 
                        class="RightAlignedInputs">
                        <tr>
                            <td>
                                <label>ISBN</label>
                            </td>
                            <td>
                                <input type="text" placeholder="ISBN">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label> Copies </label>
                            </td>
                            <td>
                              <input type="text" placeholder="Copies">  
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Date</label>
                            </td>
                            <td>
								<input type="date"> 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Published</label>
                            </td>
                            <td>
                                <input type="date">
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>	
		</table>
    </div>      


        






        </form>







</body>
</html>