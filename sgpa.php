<?php include 'includes/header.php'; ?>
<body>
    <?php include 'includes/navbar.php'; ?>

    <section class="main-section d-flex-column py-5 px-5 align-items-center flex-gap-4">
    <h1 class="text-center fs-1 mb-4">SGPA Calculator</h1>
    <div class="inputWrapper d-flex flex-gap-4">
        <input type="text" placeholder="Course Title" id="course_title" class="form-control">
        <input type="text" placeholder="Course Code" id="course_code" class="form-control">
        <input type="number" placeholder="Course Credit" id="course_credit" class="form-control">
        <input type="number" placeholder="Grade Point" id="grade_point" class="form-control">
        <button id="add" class="btn btn-primary">Add</button>
    </div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">S.No</th>
            <th scope="col">Course Title</th>
            <th scope="col">Course Code</th>
            <th scope="col">Course Credit</th>
            <th scope="col">Grade Point</th>
          </tr>
        </thead>
        <tbody class="tbody">
          <tr class="tr">
            <th scope="row">1</th>
            <td>Data Structures with C</td>
            <td>19ISCDSC</td>
            <td>3</td>
            <td>7</td>
          </tr>
          <tr class="tr">
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>4</td>
            <td>8</td>
          </tr>
          <tr class="tr">
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>3</td>
            <td>7.5</td>
          </tr>
        </tbody>
      </table>

      <button id="calculate" class="btn btn-primary">Calculate</button>

      <h3 id="calculated_sgpa"></h3>
</section>

      <?php include 'includes/footer.php'; ?>

      <script src="sgpa.js"></script>

</body>

</html>