<x-app-layout>
    <x-slot name="header">
        <h2 class=" headerFont font-semibold text-gray-800 leading-tight">
            {{ __('Contact Us') }}
        </h2>
    </x-slot>

    <style>




        .mane{
            background:rgb(0,0,0,0.5);
            width: 800px;
            margin:auto;
            line-height:60px;
        }
        form{
            padding:10px;
            border-radius:6px;
        }

        #name{
            position:relative;
            left:100px;
            top:24px;
            line-height:40px;
            border-radius:6px;
            padding:0 22px;
            font-size:16px;
        }

        #phone{
            position:relative;
            left:417px;
            top:-37px;
            line-height:40px;
            border-radius:6px;
            padding:0 22px;
            font-size:16px;



        }

        #p1{
            position:relative;
            left:100px;
            top:-70px;
            line-height:40px;
            border-radius:6px;
            text-align: center;
            padding:0 180px;
            font-size:16px;
        }

        #p2{
            position:relative;
            left:100px;
            top:-100px;
            line-height:40px;
            border-radius:6px;
            text-align: center;
            padding:0 180px;
            font-size:16px;
        }

        #timedate{
            position:relative;
            left:100px;
            top:-60px;
            line-height:40px;
            border-radius:6px;
            text-align: center;
            padding:0 18px;
            font-size:16px;
        }

        .radio{
            display:inline-block;
            padding-right:70px;
            margin-left:120px;
            margin-top:-125px;
            top:-140px;
            color:white;
        }

        #email, #email2{
            width:20px;
            height:30px;


            border-radius:50%;
            cursor:pointer;
            outline:none;
        }

        #problem{
            position:relative;
            left:100px;
            top:-100px;
            line-height:40px;
            border-radius:6px;
            padding:0 90px;
            font-size:16px;
        }

        #comment{
            position:relative;
            left: 35%;
            /*left: auto;*/
            top:-100px;
            align-content: center;
            justify-content: center;
            line-height:40px;
            border-radius:6px;
            padding:0 180px;
            font-size:16px;

        }




        html, body {
            height: 100%;
            list-style-type: none;}
    </style>





<div class="mane mb-14">
    <form id ="input" onsubmit="sendEmail(); reset(); return false;">
        <input id = "name" placeholder="Your name" required>
        <div>
            <input type="tel" id="phone" name="phone" placeholder="Phone Number" pattern="[0-9]{11,14}" required/><br><br>
        </div>
        <div class="required">
            <label for="email"><input type="email" id='p1' placeholder="Email" required/><br><br>
                <label for="email"><input type='email' id="p2" placeholder="Confirm email" required
                                          onfocus="validateMail(document.getElementById('p1'), this);"
                                          oninput="validateMail(document.getElementById('p1'), this);">
        </div>


        <select id="problem" name="problem">
            <option value="problem">Problem</option>
            <option value="problem1">Where is my order</option>
            <option value="problem2">Refund issues</option>
            <option value="problem3">Tracking order</option>
        </select>



</div>


<textarea id ="comment" placeholder="Your comment" required></textarea>




    <x-primary-button type="sumbit">
        {{ __('Sumbit') }}
    </x-primary-button>
</form>
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script>
    function sendEmail(){
        Email.send({
            Host : "smtp.elasticemail.com",
            Username : "shopwebsite017@gmail.com",
            Password : "500123FF65C4A277F47F862A685A5A85967A",
            To : 'shopwebsite017@gmail.com',
            From : document.getElementById('p1').value,
            Subject : document.getElementById('problem').value,
            Body : "Name: " + document.getElementById('name').value
                + "<br> Email: " + document.getElementById('p1').value
                + "<br> Message: " + document.getElementById('comment').value
        }).then(
            message => alert('Thank You')
        );
    }

</script>





</x-app-layout>



