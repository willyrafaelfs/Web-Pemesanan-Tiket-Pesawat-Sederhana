<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kontak Kami</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #eef2f5;
      margin: 0;
      padding: 0;
    }

    .contact-container {
      max-width: 900px;
      margin: 60px auto;
      background: #ffffff;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    .contact-container h2 {
      text-align: center;
      color: #2c3e50;
      font-size: 32px;
      margin-bottom: 10px;
    }

    .contact-container p {
      text-align: center;
      color: #7f8c8d;
      font-size: 16px;
    }

    .contact-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr); /* 2 kolom */
      gap: 30px;
      margin-top: 40px;
    }

    .contact-box {
      background-color: #f9fafc;
      padding: 25px;
      border-radius: 12px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
      text-align: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .contact-box:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 20px rgba(0,0,0,0.1);
    }

    .contact-box h3 {
      color: #2980b9;
      margin-bottom: 10px;
      font-size: 18px;
    }

    .contact-box p {
      color: #2d3436;
      font-size: 16px;
    }

    .icon {
      font-size: 28px;
      margin-bottom: 10px;
      display: block;
    }

    @media (max-width: 700px) {
      .contact-grid {
        grid-template-columns: 1fr; /* jadi 1 kolom di HP */
      }
    }
  </style>
</head>
<body>

  <section class="contact-container">
    <h2>Hubungi Kami</h2>
    <p>Tim kami siap membantu Anda. Silakan hubungi kami melalui salah satu cara berikut:</p>

    <div class="contact-grid">
      <div class="contact-box">
        <span class="icon">📍</span>
        <h3>Alamat</h3>
        <p>Jl. Merdeka No. 1<br>Jakarta Pusat, Indonesia</p>
      </div>
      <div class="contact-box">
        <span class="icon">📞</span>
        <h3>Telepon</h3>
        <p>+62 123-3456-7890</p>
      </div>
      <div class="contact-box">
        <span class="icon">✉️</span>
        <h3>Email</h3>
        <p>ayopergi@gmail.com</p>
      </div>
      <div class="contact-box">
        <span class="icon">⏰</span>
        <h3>Jam Operasional</h3>
        <p>Senin - Sabtu<br>08:00 - 17:00 WIB</p>
      </div>
    </div>
  </section>
</body>
</html>
