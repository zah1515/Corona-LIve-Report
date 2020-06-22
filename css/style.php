<style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        font-family: 'Lobster', cursive;
    }

    .nav_style {
        background-color: #a29bfe !important
    }

    .nav_style a {
        color: white !important;
    }

    .main_header {
        height: 450px;
        width: 100%;
    }

    .rightside h1 {
        font-size: 3rem;
    }

    .corona_rot img {
        animation: gocon 3s linear infinite;
    }

    @keyframes gocon {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .leftside {
        animation: heartbeat 3s linear infinite;
    }

    @keyframes heartbeat {
        0% {
            transform: scale(.75);
        }

        20% {
            transform: scale(1);
        }

        40% {
            transform: scale(.75);
        }

        60% {
            transform: scale(1);
        }

        80% {
            transform: scale(.75);
        }

        100% {
            transform: scale(.75);
        }
    }

    .sub_section {
        background-color: #fbfafd;
    }
</style>