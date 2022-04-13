<?php include"includes/header.php" ?>

<div id="layoutSidenav_content">
<main>
<div class="container-fluid px-4">








<!-- new post section start--------------------------------->
<div class="container post_creation_section">
    <div class="create_post">
        <h1>Create New Post</h1>
        <form action="" method="post">
            <div class="post_title">
                <label>Create a title</label>
                <input type="text" name="title" id="title_area"  >
            </div>
            <div class="post_text">
                <label>Write your post</label>
                <textarea name="title" id="post_text_area"  rows="6"></textarea>
            </div>
            <div class="thamnale_box">
                <label>Choice a thamnale</label>
                <input type="file" id="thamnale">
                <label>Write thamnale description</label>
                <input type="text" id="thamnale_des">
            </div>
            <div class="category_box">
                <label>Categorys</label>
                <select name="" id="categorys" >
                    <option value="volvo">hello</option>
                    <option value="volvo">hello</option>
                    <option value="volvo">hello</option>
                    <option value="volvo">hello</option>
                    <option value="volvo">hello</option>
                    <option value="volvo">hello</option>
                </select>
            </div>
            <div class="sub_category_box">
                <label>sub Category</label>
                <select name="" id="sub_categorys" >
                    <option value="volvo">hello</option>
                    <option value="volvo">hello</option>
                    <option value="volvo">hello</option>
                    <option value="volvo">hello</option>
                    <option value="volvo">hello</option>
                    <option value="volvo">hello</option>
                </select>
            </div>
            <button type="button" class="btn btn-primary post_btn">submit</button>
            
        </form>
    </div>
</div>
<!-- new post section end --------------------------------->












</div>
</main>
<footer class="py-4 bg-light mt-auto">
<div class="container-fluid px-4">
<div class="d-flex align-items-center justify-content-between small">
<div class="text-muted">Copyright &copy; Your Website 2022</div>
<div>
<a href="#">Privacy Policy</a>
&middot;
<a href="#">Terms &amp; Conditions</a>
</div>
</div>
</div>
</footer>
</div>
</div>
<script src="js/dashbord.js"></script>
<script src="js/scripts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>
</body>
</html>
