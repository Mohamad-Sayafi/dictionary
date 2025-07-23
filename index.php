<?php
require_once 'loader.php';
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dictionary</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="assets/js/main.js"></script>

  <style>
    body {
      background: linear-gradient(135deg, #f0f4f8, #e9f0f5);
      font-family: 'Vazirmatn', sans-serif;
    }

    .translator-box {
      background: #fff;
      border-radius: 1rem;
      padding: 2rem;
      max-width: 600px;
      margin: 5rem auto;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
      position: relative;
    }

    .lang-box {
      background-color: #f8f9fa;
      border-radius: 0.75rem;
      padding: 1rem;
      border: 1px solid #ced4da;
      margin-bottom: 1.5rem;
    }

    textarea {
      border: none;
      background: transparent;
      width: 100%;
      height: 140px;
      resize: none;
      outline: none;
      font-size: 1rem;
    }

    .direction-select {
      position: absolute;
      top: 2rem;
      left: 2rem;
      width: 160px;
      font-size: 0.85rem;
      padding: 0.3rem 0.5rem;
    }

    .output-box {
      border: 1px dashed #ccc;
      padding: 1rem;
      border-radius: 0.75rem;
      min-height: 80px;
      background-color: #f8f9fa;
      color: #495057;
      font-size: 1rem;
    }

    .output-box.empty {
      color: #adb5bd;
    }

    #wordInput {
      height: 60px;
      font-size: 18px;
      padding: 12px;
    }

    #result {
      min-height: 200px;
      padding: 15px;
      font-size: 16px;
    }
  </style>
</head>

<body>

  <div class="container translator-box">
    <h5 class="text-center mb-4 text-primary">Online Dictionary</h5>
    <form action="" method="post" id="searchForm">
      <select class="form-select direction-select" id="direction">
        <option value="en-fa">EN - FA</option>
        <option value="fa-en">FA - EN</option>
      </select>
      <input type="text" id="wordInput" class="form-control" placeholder="Enter a word..." required>
    </form>
    <div id="result" class="output-box mt-4 empty"></div>
  </div>

</body>

</html>