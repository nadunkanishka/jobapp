<html>

<head>
  <meta charset="utf-8">
  <title>Job Application </title>
  <link rel="stylesheet" href="styles.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
</head>

<body>

  <!-- REGISTER -->
  <div class="container1">
    <header>Job Application</header>

    <div class="form-outer">
      <form action="submit.php" method="post" enctype="multipart/form-data" autocomplete="off">
        <div class="page slide-page">
          <div class="title">Fill out the form below to submit your application</div>
      
          <div class="field">
            <div class="label">Full Name</div>
            <input type="text" name="full_name" required>
          </div>
      
          <div class="field">
            <div class="label">Email</div>
            <input type="email" name="email" required>
          </div>
      
          <div class="field">
            <div class="label">Phone Number</div>
            <input type="text" name="mobile" required>
          </div>
      
          <div class="label">CV Upload</div>
          <div class="file-upload">
            <input type="file" id="file" name="file" accept=".pdf, .docx" hidden onchange="displayFileName()" required>
            <label for="file">
              <i class="fas fa-upload"></i>
              <span class="upload-text">Upload a file</span> or drag and drop
              <p id="file-name">PDF or DOCX up to 10MB</p>
            </label>
          </div>
      
          <div class="field">
            <button class="firstNext next" type="submit">Submit</button>
          </div>
        </div>
      </form>
    </div>

  </div>

  <script>
    function displayFileName() {
      const fileInput = document.getElementById('file');
      const fileName = document.getElementById('file-name');

      if (fileInput.files.length > 0) {
        fileName.textContent = fileInput.files[0].name;
      } else {
        fileName.textContent = "PDF or DOCX up to 10MB";
      }
    }
  </script>

</body>

</html>
