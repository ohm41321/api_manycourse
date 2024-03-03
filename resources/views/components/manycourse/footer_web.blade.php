<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Many Course</title>
<style>

    .footer {
        background-color: #212121;
        color: #fff;
        padding: 20px;
        text-align: center; 
    }

    .footer a {
        color: #fff;
        text-decoration: none;
    }

    .container-bt {
        display: flex;
        justify-content: center; 
        align-items: center; 
    }

    /* Button styles */
    .button-footer {
        border-radius: 4px;
        background-color: #212121;
        border: none;
        color: #fff;
        text-align: center;
        font-size: 15px;
        padding: 15px 25px;
        transition: all 0.3s ease;
        cursor: pointer;
        border: 1.5px solid ; 
        border-color: orange;
    }
    .button-footer:hover{
      border-color: #fff;
      color: orange;
    }
    .button-footer .span-ft {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
    }

    .button-footer .span-ft:after {
        content: '»';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -15px;
        transition: 0.5s;
    }

    .button-footer:hover .span-ft {
        padding-right: 15px;
    }

    .button-footer:hover .span-ft:after {
        opacity: 1;
        right: 0;
    }

    /* Text styles */
    .text-footer {  
        font-size: 1.2em;
        margin-top: 20px;
        text-align: left;
        flex-grow: 1; 
    }

</style>
</head>
<body>

<footer class="footer">
    <div class="container-bt">
        <div class="text-footer">
            <p>Many Course Education Thailand &copy; 2024</p>
        </div>
        <a href="#regis" class="button-footer"><span class="span-ft">Register Now!</span></a>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('a[href^="#"]').on('click', function(event) {
            var target = $(this.getAttribute('href'));
            if (target.length) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top
                }, 1000);
            }
        });
    });
</script>
</body>
</html>
