<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?= $judul; ?></title>

  <!-- Bootstrap -->
  <link rel="stylesheet"
  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


  <style>

    body{
      margin:0;
      padding:0;
      background:#f5f5f5;
      font-family: Arial, sans-serif;
    }

    /* SIDEBAR */
    .sidebar{
      position: fixed;
      left: 0;
      top: 0;
      width: 220px;
      height: 100%;
      background: #8B0000;
      padding-top: 20px;
      z-index: 999;
    }

    .sidebar h3{
      color:white;
      text-align:center;
      margin-bottom:30px;
      font-weight:bold;
      font-family:'Great Vibes', cursive;
      font-size:32px;
    }

    .sidebar a{
      display:block;
      color:white;
      padding:15px 20px;
      text-decoration:none;
      transition:0.3s;
      font-size:14px;
    }

    .sidebar a:hover{
      background:#a30000;
      padding-left:30px;
    }

    /* CONTENT */
    .admin-content{
      margin-left:240px;
      padding:30px;
    }

    /* LOGIN PAGE */
    .login-page{
      background:#f5f5f5;
      display:flex;
      justify-content:center;
      align-items:center;
      min-height:100vh;
    }

  </style>

</head>

<body class="<?= ($judul == 'Halaman Login') ? 'login-page' : ''; ?>">