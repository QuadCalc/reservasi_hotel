document.getElementById('tamuForm').onsubmit = async function(e) {
    e.preventDefault();
    const form = e.target;
    const data = {
      nama: form.nama.value,
      email: form.email.value,
      no_telepon: form.no_telepon.value
    };
    const res = await fetch('api/tamu/add.php', {
      method: 'POST',
      body: JSON.stringify(data)
    });
    const result = await res.json();
    alert(result.message);
  };