document.querySelector('#mensaje').addEventListener('input', function() {
    const text = this.value;
    const name = document.querySelector('#nombre').value;
    const url = `https://wa.me/59897807023?text=${encodeURIComponent(text)}%0A%0A${encodeURIComponent(name)}`;
    document.querySelector('#enviarwpp').href = url;
});

document.querySelector('#nombre').addEventListener('input', function() {
    const text = document.querySelector('#mensaje').value;
    const name = this.value;
    const url = `https://wa.me/59897807023?text=${encodeURIComponent(text)}%0A%0A${encodeURIComponent(name)}`;
    document.querySelector('#enviarwpp').href = url;
});
