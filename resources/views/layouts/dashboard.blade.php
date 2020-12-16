@extends('layouts/base')

@section('head')
<!-- <link rel="stylesheet" href="{ 'css/dashboard.css' %}" /> -->
<link href="css/bootstrap.css" rel="stylesheet">
<!-- <link rel="stylesheet" href="{{ URL::asset('css/dashboard.css') }}" /> -->
@endsection


@section('body')
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active" style="width: 100vw; height: 88vh;">
                <img style="width: 100vw; max-height: 110vh;" src="https://lh3.googleusercontent.com/qrnQ2HWiZIL5tm5eu943oM-jB4yvJxXSsXLDtJI6TuXD86TzWHY6dR_0k3rXaA3mxcaWtroMaCpdaoqRmHecLiL2UAATjqUXh5o-eCrJlzVYfr1-_rDrYGZn_ZpsUxiVdb3_DN9rV_a1ahYkvRignI_dhmb8OQi5xRIgBrGpOsK7Q_oXp9NiCQ5qQRuapqf_Ru7GliBT0IeiSU5JfyRrrh2C4Fn5F8mGKPLIu4DeVdcy3M9ti1elB5ANzrz3qeXzqpodoXcnqKaLcobG7rHXEpn7DUB5eHXMlvRvIK39UPxU9edooTdf3ZO9WpRLzilBBV0cop6EgTKb7yaswHWz1MkUYaj3XlDIJXP9oUrwHRoAwtilOABAV3xhXOKK9mvDYTvo00QMnndbfyGKg_AisOcCU0JTJN6AMg2WIkH_SmhF_wQ0HD1PI65cFpjHwxb3UpiocKsP9EqlGxSnCz4m6Jm3PtcwlTiiPb9DcNnlIc1JDIQjUtmIWyRzsker1YZHn61gO2GGjqtgN_uUcxi3iyrirBYEorqD5XhukqPzUSgaKbSNFOHDxICZ8_iRSHL45m8heZM07ulYGO06XoM2Jq-a7tIblbyRz3pbkfrYT32UPbXxq7DI0RhpKgufgR1H_oUsSkPEjMHHQsUiAvCqnZ1cZknakz_setEl4mSkdUuZJ_2U5njvS9oz_vIw=w1112-h696-no?authuser=0" alt="SAMBILBELAJAR">
            </div>

            <div class="item" style="width: 100vw; height: 88vh;">
                <img style="width: 100%;" src="https://lh3.googleusercontent.com/CGNkYXiVJQ6gjSXZVu3IMTF6BdHk6yCQroQKLCa5-Nnh3CGZs-hJ7DxtSzIUtFkJ_uiFtlaQddfma3jYt05dDMQtCEpmL998td4uwnQjAvKwWPoYBirbbs7--polWQtmkh7h5Qa_Zz9xdCmC2IZ39Tcxa3ya1BV9ct-xP7FPABBBDYER4rZIhXtsiQzk6VGoemee5fnqTF83QW1E4pWMac8Zb4Ysb8fkvGhkGH3ikQrdSgMCQ-yz-Oi0dhoeUx_m--WJVn_zAcsqpfU5r1nHdsIwamkand78M0SiBgyse4RpM3rUnGQqJbgM9fuGEzsD_hyOaS5bAiE9fp-JkzbdIIAseh3WUuahImoxUnftCXPNzGaQ1wRrVisFU7WhYTEBKKTUPxwuIpob57n3h7jLSrDtdPbg4_mG58gzvIkSYZK2HvtDhJUgPCZAkyiScWr7KM_j_RdrbIpKH7z8ky9BWPIUmQAEBNSK9iWBykzowqw0xpdD6HOfC9fqpD_jzxMbzLKvKCEVU8vnc5CW5xoTYjQVZGgXNJCtzZiYEfekqukoj-aHQzz5DwyGREGEMjvYuiCXOvSJmUbBEeOqRH2KoWbEkQJq8Y648n10nw5TgwJ8iXUEU51n7Cx0bXnanuBvUlJyEzCAS6ItgqREwC3e60Zt-T2Mo0eyleFguULrlP9djqJDWxVQwcwW7XPS=w1112-h696-no?authuser=0" alt="Pizza Promo">
            </div>

            <div class="item" style="width: 100vw; height: 88vh;">
                <img style="width: 100%; max-height: 100vh;" src="https://lh3.googleusercontent.com/DEbjkdfagVDrVmWi2Z3Yx50bAKt8p1XRByGyBvPfTKdswefoV4RDZqNvc0sRAjLR4FauhMXMCktXbpTsEIeOzAwxPME9qkC25nuf9iRT5wZNHMrac4U_ZwOw-1NjUxsiTeIZ-f-S3mVFzj5vgDt85VPVDrxmNri1bA9H6zHr60vzoldOp4PoYuKz9gu9RsO-z-pGSw26mDY8ckoaxoYT2R0tAn6_BLrxEbEdnI0lmBYmd1lOVW-J0fiLRGmGSzloRPN3VlSYB6j_nP1-JWK0CGW9-Kn7StX09zwvsCVfAtCWJbUYkBD6ameI8F-vHF0ktv5butsJ6htJipmZKOCFySAHr6s2VtaZGCzd1OUpw9KUBk5mKSAN0Lm0gPXyuW2FAyL8GkooRo7U3hKBRGA9u2G2gMi6vQGpnisfIhLo3tc1f4fk668tXxO4fg6ab27GLoEjMYFFDVAXNZ732xGlZLRyhI9loBG1nnjElaMjctWZELTMhjb1jpTHZbhX_98w6pmS5NvQakXQ9uGc1IiQyhmt39TZGWve0LmFzAzZSGlGihG2bqlqa4vnuv2WI5S5f30v1uM8oMTViThvH1avwSB4qSh9r12oT_P6QiK7_fIQYlGW00y1vo2BZHSKFDl3h8NFhxHCvvh5fQyCKX9BBchlXk-blIKtLlLpBfR5RIPMqahVIo2WLEkhflVs=w1021-h638-no?authuser=0" alt="SanFish">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
@endsection