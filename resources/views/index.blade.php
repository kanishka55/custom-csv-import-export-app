<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        @import 'https://fonts.googleapis.com/css?family=Open+Sans:600,700';

        * {font-family: 'Open Sans', sans-serif;}

        .rwd-table {
        margin: auto;
        min-width: 300px;
        max-width: 100%;
        border-collapse: collapse;
        }

        .rwd-table tr:first-child {
        border-top: none;
        background: #428bca;
        color: #fff;
        }

        .rwd-table tr {
        border-top: 1px solid #ddd;
        border-bottom: 1px solid #ddd;
        background-color: #f5f9fc;
        }

        .rwd-table tr:nth-child(odd):not(:first-child) {
        background-color: #ebf3f9;
        }

        .rwd-table th {
        display: none;
        }

        .rwd-table td {
        display: block;
        }

        .rwd-table td:first-child {
        margin-top: .5em;
        }

        .rwd-table td:last-child {
        margin-bottom: .5em;
        }

        .rwd-table td:before {
        content: attr(data-th) ": ";
        font-weight: bold;
        width: 120px;
        display: inline-block;
        color: #000;
        }

        .rwd-table th,
        .rwd-table td {
        text-align: left;
        }

        .rwd-table {
        color: #333;
        border-radius: .4em;
        overflow: hidden;
        }

        .rwd-table tr {
        border-color: #bfbfbf;
        }

        .rwd-table th,
        .rwd-table td {
        padding: .5em 1em;
        }
        @media screen and (max-width: 601px) {
        .rwd-table tr:nth-child(2) {
            border-top: none;
        }
        }
        @media screen and (min-width: 600px) {
        .rwd-table tr:hover:not(:first-child) {
            background-color: #d8e7f3;
        }
        .rwd-table td:before {
            display: none;
        }
        .rwd-table th,
        .rwd-table td {
            display: table-cell;
            padding: .25em .5em;
        }
        .rwd-table th:first-child,
        .rwd-table td:first-child {
            padding-left: 0;
        }
        .rwd-table th:last-child,
        .rwd-table td:last-child {
            padding-right: 0;
        }
        .rwd-table th,
        .rwd-table td {
            padding: 1em !important;
        }
        }


        /* THE END OF THE IMPORTANT STUFF */

        /* Basic Styling */
        body {
        background: #4B79A1;
        background: -webkit-linear-gradient(to left, #4B79A1 , #283E51);
        background: linear-gradient(to left, #4B79A1 , #283E51);        
        }
        h1 {
        text-align: center;
        font-size: 2.4em;
        color: #f2f2f2;
        }
        .container {
        display: block;
        text-align: center;
        }
        h3 {
        display: inline-block;
        position: relative;
        text-align: center;
        font-size: 1.5em;
        color: #cecece;
        }
        h3:before {
        content: "\25C0";
        position: absolute;
        left: -50px;
        -webkit-animation: leftRight 2s linear infinite;
        animation: leftRight 2s linear infinite;
        }
        h3:after {
        content: "\25b6";
        position: absolute;
        right: -50px;
        -webkit-animation: leftRight 2s linear infinite reverse;
        animation: leftRight 2s linear infinite reverse;
        }
        @-webkit-keyframes leftRight {
        0%    { -webkit-transform: translateX(0)}
        25%   { -webkit-transform: translateX(-10px)}
        75%   { -webkit-transform: translateX(10px)}
        100%  { -webkit-transform: translateX(0)}
        }
        @keyframes leftRight {
        0%    { transform: translateX(0)}
        25%   { transform: translateX(-10px)}
        75%   { transform: translateX(10px)}
        100%  { transform: translateX(0)}
        }

    </style>
</head>
<body>
    <div class="container">
        <table class="rwd-table">
            <thead>
                <th colspan="8">
                    <a href="{{ route('export') }}" class="btn btn-success">Export CSV</a>
                </th>
            </thead>
            <tbody>
                <tr>
                <th>first name</th>
                <th>last name</th>
                <th>email</th>
                <th>phone no.</th>
                <th>date of birth</th>
                <th>gender</th>
                <th>skills</th>
                <th>basic salary</th>
                </tr>
                
                @foreach ($employees as $list)
                <tr>
                    <td>{{ $list->first_name }}</td>
                    <td>{{ $list->last_name }}</td>
                    <td>{{ $list->email }}</td>
                    <td>{{ $list->phone }}</td>
                    <td>{{ $list->date_of_birth }}</td>
                    <td>{{ $list->gender }}</td>
                    <td>
                        <ul>
                            @foreach (json_decode($list->skills) as $skills)
                                <li>
                                    {{ $skills }}
                                </li>
                            @endforeach
                        </ul>
                    </td>
                    <td>{{ $list->basic_salary }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>