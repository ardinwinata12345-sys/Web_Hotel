<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel - Hotel Pro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { background: #f4f6f9; overflow-x: hidden; }
        .sidebar { background: #1B3C53; min-height: 100vh; color: white; transition: 0.3s; }
        .sidebar a { color: rgba(255,255,255,0.8); text-decoration: none; display: block; padding: 15px; border-bottom: 1px solid rgba(255,255,255,0.05); }
        .sidebar a:hover, .sidebar a.active { background: #456882; color: white; padding-left: 25px; transition: 0.3s; border-left: 5px solid #d4af37; }
        .card-stat { border: none; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: 0.3s; }
        .card-stat:hover { transform: translateY(-5px); }
    </style>
</head>
<body>
<div class="d-flex">