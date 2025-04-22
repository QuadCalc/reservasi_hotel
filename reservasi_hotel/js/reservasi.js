document.getElementById('reservasiForm').onsubmit = async function(e) {
    e.preventDefault();
    const form = e.target;
    const data = {
      id_tamu: form.id_tamu.value,
      id_kamar: form.id_kamar.value,
      tanggal_checkin: form.tanggal_checkin.value,
      tanggal_checkout: form.tanggal_checkout.value
    };
    const res = await fetch('api/reservasi/add.php', {
      method: 'POST',
      body: JSON.stringify(data)
    });
    const result = await res.json();
    alert(result.message);
  };
  