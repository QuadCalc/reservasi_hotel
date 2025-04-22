document.getElementById('pembayaranForm').onsubmit = async function(e) {
    e.preventDefault();
    const form = e.target;
    const data = {
      id_reservasi: form.id_reservasi.value,
      tanggal_bayar: form.tanggal_bayar.value,
      jumlah_bayar: form.jumlah_bayar.value,
      metode: form.metode.value,
      status: form.status.value
    };
    const res = await fetch('api/pembayaran/add.php', {
      method: 'POST',
      body: JSON.stringify(data)
    });
    const result = await res.json();
    alert(result.message);
  };
  