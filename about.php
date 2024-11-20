<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="About Page">
    <meta name="keywords" content="HTML, tags, webpage">
    <meta name="author" content="20-I - Kelly Sutopo & Luke Nervosa">
    
    <link href="styles/style.css" rel="stylesheet">
    <link rel="icon" href="images/icons8-team-goal-48.png">
    <!-- Open Sans font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>About | 20-I Tech</title>
</head>
<body class="about">
  <nav>
    <?php include 'menu.inc'; ?>
  </nav>
  <header class="title">
    <h1>About Us</h1>
  </header>
  <section id="group">
    <!-- <div id="groupdetails">
      <dl>
        <dt>Group name</dt>
          <dd>JKL</dd>
        <dt>Group ID</dt>
          <dd>2</dd>
        <dt>Group email</dt>
          <dd><a href="mailto:jkltech@gmail.com">jkltech@gmail.com</a></dd>
        <dt>Course</dt>
          <dd>Bachelor of Computer Science</dd>
        <dt>Tutor's name</dt>
          <dd>Fatma Mohammed</dd>
      </dl>
    </div> -->
    <!-- <div id="groupdetails">
      <img src="images/czNmcy1wcml2YXRlL3Jhd3BpeGVsX2ltYWdlcy93ZWJzaXRlX2NvbnRlbnQvbHIvcm0yMThiYXRjaDQta2F0aWUtMTcuanBn.webp" alt="20-I Group Photo">
    </div> -->
    <figure id="groupphoto">
        <img src="images/groupphoto1.jpg" alt="20-I Group Photo">
        <figcaption class="caption">The 20-I team</figcaption>
    </figure>
  </section>
  <section id="teammembers">
    <h2>Meet the Team</h2>
    <p><strong>James Williams</strong><br><a href="mailto:james.williams@20i.com">james.williams@20i.com</a><br>James Williams brings over 10 years of leadership experience to the team, specializing in strategic development and team dynamics. With a passion for innovation and creating effective solutions, Sarah ensures every project reaches its highest potential.</p>
    <!-- <dl> <dt>Fun Fact</dt> <dd>She spent 10 years playing netball.</dd> </dl> -->
    <p><strong>Amelia Harris</strong><br><a href="mailto:amelia.harris@20i.com">amelia.harris@20i.com</a><br> Amelia is a seasoned project manager with a knack for streamlining processes and ensuring team success. With over 8 years of experience, she keeps everyone on track and motivated.</p>
    <!-- <dl> <dt>Fun Fact</dt> <dd>She likes to design (digital media), crochet, and dance.</dd> </dl> -->
    <p><strong>Liam Carter</strong><br><a href="mailto:liam.carter@20i.com">liam.carter@20i.com</a><br>Liam specializes in backend development and database optimization. He ensures systems are robust, secure, and efficient.</p>
    <p><strong>Sophia Turner</strong><br><a href="mailto:sophia.turner@20i.com">sophia.turner@20i.com</a><br> A creative UX/UI designer, Sophia focuses on crafting user-friendly designs that enhance user experience. She’s the go-to for all things design-related.</p>
    <!-- <dl> <dt>Fun Fact</dt> <dd>He likes mountain biking.</dd> </dl> -->
     <p>...<p/>
  </section>
  <hr>
  <section id="timetable">
    <h3>Timetable</h3>
    <div id="table">
      <table>
        <tr>
          <th>Time</th>
          <th>Monday</th>
          <th>Tuesday</th>
          <th>Wednesday</th>
          <th>Thursday</th>
          <th>Friday</th>
        </tr>
        <tr>
          <td>08.30 - 09.30</td>
          <td></td>
          <td rowspan="2" class="eco5"><strong>ECO10005</strong><br>Economics for Business Decision Making</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>09.30 - 10.30</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>10.30 - 11.30</td>
          <td></td>
          <td rowspan="2" class="cos9"><strong>COS10009</strong><br>Introduction to Programming</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>11.30 - 12.30</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>12.30 - 13.30</td>
          <td rowspan="2" class="cos26"><strong>COS10026</strong><br>Computing Technology Inquiry Project</td>
          <td></td>
          <td></td>
          <td rowspan="2" class="cos9"><strong>COS10009</strong><br>Introduction to Programming</td>
          <td></td>
        </tr>
        <tr>
          <td>13.30 - 14.30</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>14.30 - 15.30</td>
          <td></td>
          <td></td>
          <td rowspan="2" class="cos4"><strong>COS10004</strong><br>Computer Systems</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>15.30 - 16.30</td>
          <td></td>
          <td rowspan="2" class="cos26"><strong>COS10026</strong><br>Computing Technology Inquiry Project</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>16.30 - 17.30</td>
          <td></td>
          <td></td>
          <td></td>
          <td rowspan="2" class="cos4"><strong>COS10004</strong><br>Computer Systems</td>
        </tr>
        <tr>
          <td>17.30 - 18.30</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </table>
    </div>
  </section>

  <footer>
    <?php include 'footer.inc'; ?>
  </footer>
</body>
</html>