<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
	 <title>PDF Form </title>
	 
	 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous"> 
	 
	 
	 </head>
	 <body>
	        
			<div class="container mt-5">
			
			
			      <form action="makepdf.php" method="post" class ="offset-md-3 col-md-6">
				  
				  
				  <h1>Create your own PDF</h1>
				  <p>Fill out the  details below and the PDF will download</p>
				  <div class="row mb-2">
				          <div class="col-md-6">
				               <input type="text" name="fname" placeholder="First Name" class="form-control" required>
				          </div>
				          <div class="col-md-6">
				               <input type="text" name="lname" placeholder="Surname" class="form-control" required>
				           </div>
				       </div>
					   <div class="mb-2">
				            <input type="text" name="Email" placeholder="Email" class="form-control" required>
				       </div>
				       <div class ="mb-2">
				            <input type="tel" name="phone" placeholder="phone" class="form-control" required>
					   </div>
                       <div class="mb-2">					   
				            <textarea name="message" placeholder="Your Message" class="form-control" required></textarea>
				        </div>
				  <button type="submit" class="btn btn-success ">Create PDF </button>
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  </form>
			
			
			
			
			
			
			</div>
			
			
			
	 
	 
	 </body>
	 </html>
