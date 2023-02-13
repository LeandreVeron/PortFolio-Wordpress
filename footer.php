<?php wp_footer()?>
<footer>
    <div class="col-12 col-sm-6 mx-0 ">
     <form method="post" action="send.php">
        Nom :<br>
        <input type="text" name="nom">
        <br>Objet :<br>
        <input type="text" name="objet">
        <br>
        Message :
        <br>
        <textarea name="message"></textarea>
        <br>
        <input type="submit" value="Send">
        </form>
    </div>
    
</footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>