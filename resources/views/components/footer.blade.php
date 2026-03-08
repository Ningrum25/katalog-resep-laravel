<style>
.footer-food{
    background: linear-gradient(90deg,#ff7a18,#ffb347);
    color:white;
    text-align:center;
    padding:15px;
    font-weight:500;
    letter-spacing:1px;
}

.footer-food span{
    animation: glow 2s infinite alternate;
}

@keyframes glow{
    from{
        text-shadow:0 0 5px white;
    }
    to{
        text-shadow:0 0 15px white;
    }
}
</style>

<footer class="footer-food mt-5">

🍜 Katalog Resep | Dibuat dengan ❤️ menggunakan Laravel  

<br>

<span>© {{ date('Y') }} Food Recipe App</span>

</footer>
