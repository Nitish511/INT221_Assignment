<h1>Upload File</h1>
<form action"upload" method="POST" enctype="multipart/form-data">


<label for="fname">Name:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Registration no.:</label><br>
  <input type="number" id="lname" name="lname">
  <br></br>
  <label for="fname">CGPA:</label><br>
  <input type="number" id="fname" name="fname"><br>
  <label for="lname">Specialization:</label><br>
  <input type="text" id="lname" name="lname">
<br></br>



    @csrf
    <input type="file" name="file"> <br><br>
    <button type="submit">Upload File</button>
    
  

</form>