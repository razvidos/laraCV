@extends('layers.html')

@php
const MY_DATA_FORMAT_EDUCATION = 'Y';
const MY_DATA_FORMAT_WORK = 'm.Y';

$icons = [
    'email' => 'https://cdn-icons-png.flaticon.com/512/732/732200.png',
    'mobile' => 'https://cdn-icons-png.flaticon.com/512/724/724664.png',
    'telegram' => 'https://cdn-icons-png.flaticon.com/512/5968/5968804.png',
    'linkedIn' => 'https://cdn-icons-png.flaticon.com/512/174/174857.png',
    'github' => 'https://cdn-icons-png.flaticon.com/512/3291/3291695.png',
];

$user_info = [
    'name' => 'Ihor',
    'surname' => 'Solomianiy',
    'birthdate' => strtotime('2000-05-25'),
    'new_position' => 'PHP Developer (Laravel)',
    'avatar' => 'https://media-exp1.licdn.com/dms/image/C4D03AQGtG-I3-s-Jzw/profile-displayphoto-shrink_800_800/0/1663066812680?e=1668643200&v=beta&t=pjRVsw3vH_5AKkvo2pVAzWPE7bvn9x6zdSsrdfTIFsI',
    'additional' => [
        'CONTACTS' => [
            'email' => 'ingvar.soloma@gmail.com',
            'mobile' => '+380 97 224 08 64',
            'telegram' => 'ingvar_soloma',
            'linkedIn' => 'ingvar-soloma',
            'github' => 'razvidos',
        ],
        'ABOUT' => [
            'city' => 'Kyiv',
        ],
        'LANGUAGES' => [
            'English' => 'B1',
            'Ukrainian' => 'native',
            'Russian' => 'native',
        ],
        'HARD SKILLS' => [
            'PHP' => [
                'link' => 'https://cdn-icons-png.flaticon.com/512/5968/5968332.png',
                'version' => '7.4', 'experience' => "2,5 years"],
            'Laravel' => [
                'link' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png',
                'version' => '8', 'experience' => '3 months'],
            'Python' =>
                ['link' => 'https://cdn-icons-png.flaticon.com/512/5968/5968350.png',],
            'MySQL' =>
                ['link' => 'https://cdn-icons-png.flaticon.com/512/5968/5968313.png',],
            'API' =>
                ['link' => 'https://cdn-icons-png.flaticon.com/512/718/718064.png',],
            'HTML, CSS, JS' =>
                ['link' => 'https://t3.ftcdn.net/jpg/05/27/97/74/360_F_527977463_hcQAYoMqDE17JUYji9J9bVIV6CWMsFuG.jpg',],
        ],
        'SOFT SKILLS' => [
            'Communication',
            'Focus on customer',
            'Problem-solving',
            'Time management',
        ],
        'HOBBIES' => [
            'cycling' => 'https://cdn-icons-png.flaticon.com/512/3600/3600996.png',
            'swimming' => 'https://cdn-icons-png.flaticon.com/512/2264/2264829.png',
            'tourism' => 'https://cdn-icons-png.flaticon.com/512/2264/2264733.png',
            'snowboarding' => 'https://cdn-icons-png.flaticon.com/512/2503/2503541.png',
            'photo' => 'https://cdn-icons-png.flaticon.com/512/2985/2985659.png',
            'guitar' => 'https://cdn-icons-png.flaticon.com/512/2892/2892205.png',
        ]
    ],
    'ADDITIONAL INFORMATION' => <<<EOT
        I like automation and influence the development of the project.\n
        I like to share experiences with other people.
        I want to have the freedom to choose solutions for projects and bring tasks to their logical
        conclusion.
        I know how to focus and not drown in dozens of tasks.
        EOT,
];

$user_info['additional']['ABOUT']['age'] = date_diff(
    date_create(date("Y-m-d", $user_info['birthdate'])),
    date_create(date("Y-m-d"))
)->format('%y');

$educations_info = [
    [
        'startAt' => strtotime('2018-09'),
        'endAt' => strtotime('2023-06'),
        'name' => 'NATIONAL AVIATION UNIVERSITY',
        'faculty' => 'Faculty of cybersecurity, computer and software engineering.',
        'specialty' => 'Software Engineering.',
    ],
];

$works_info = [
    [
        'startAt' => strtotime('2022-06'),
        'endAt' => '',
        'name' => 'Grodas',
        'experiences' => [
            ['position' => 'Full-stack Developer',
                'description' => [
                    'Development of integration',
                    'Debugging work of synchronization',
                    'Detection and description of third-party service errors',
                    'Project support',
                    'Front-end development',
                    'Testing results of development',
                ],],
        ],
    ],
    [
        'startAt' => strtotime('2021-11'),
        'endAt' => strtotime('2022-05'),
        'name' => 'AniArt',
        'experiences' => [
            ['position' => 'PHP Developer',
                'description' => [
                    'Development of new functionality at the requests of the client;',
                    'Training the client to use the new functionality;',
                    'Initial testing of new functionality before delivery;',
                    'Bug fix of legacy code;',
                    'Writing work logs on completed tasks;',
                ],],
            ['position' => 'Project Manager (Additional role)',
                'description' => [
                    'Performed phone calls, and led meetings with the client for:',
                    'Preparation of Terms of Reference;',
                    'Setting and agreeing on deadlines;',
                    'Determining the current priorities among the tasks;',
                    'Presentations of new functionality',
                ],
            ],

        ],
    ],
    [
        'startAt' => strtotime('2019-09'),
        'endAt' => strtotime('2021-10'),
        'name' => 'TCM Group Ukraine',
        'experiences' => [
            ['position' => 'PHP Developer',
                'description' => [
                    'Automation and development of new functionality',
                    'Refactoring of new and existing projects',
                    'Development of the architecture of new modules',
                    'Development of projects accordingly to technical specifications',
                ],
                'achievements' => [
                ],],
            ['position' => 'Junior IT Manager (Additional role)',
                'description' => [
                    'Writing technical tasks',
                    'Procurement budgeting',
                    'Security policies development',
                    'CRM administration (Bitrix24)',
                ],],
        ],
        'achievements' => <<<EOT
            The process of editing templates for mailing
            (SMS, letters, calls) is simplified.
            Before automation, the text editing process could take 1 month,
            and after less than 1 week.
            Integration of additional logic for handling shipment restrictions.
            EOT,
    ],
];

@endphp

@section('style')
    <style type="text/css">
        body {background-color:#0f0f0f08;}
        .page-wrapper {
            box-shadow: 2px 2px 2px 2px #00000017;
            background-color: white;
            display: flex;
            width: fit-content;
            margin: .5em auto;
            padding: 2em 1em;
        }
        .page-wrapper > .main-column {
            margin: 1em 1.5em;
            min-width: 460px;
            max-width: 800px;
            flex-wrap: nowrap;
        }

        .page-wrapper > .added-column {
            margin: 1em 1.5em;
            min-width: 230px;
            width: min-content;
        }
        .chapter {
            border-bottom: 3px solid #5192ab;
            margin-top: 1em;
        }

        .chapter::before {
            background-color: #5192ab;
            padding: 1px 10px 1px;
            margin-right: 0.3em;
            font-size: x-large;
            font-weight: 750;
            color: white;
            content: "/";
        }
        .row {
            justify-content: center;
        }

        .main-column {
            width: fit-content;
            flex-grow: 1;
        }

        .added-column {
            width: auto;
        }
        .info-block {
            position: relative;
        }

        .info-date {
            position: absolute;
            right: 0;
        }
        .img-svg {
            margin-bottom: 0.5em;
            height: 2em;
            width: auto;
        }
        .img-svg.small {
            height: 1em;
        }
    </style>
@endsection

@section('main-content')
        <div class="page-wrapper">

            <div class="main-column">
                <h1>
                    {{ $user_info['name'] }}
                    {{ $user_info['surname'] }}
                </h1>
                <h2>
                    <i>{{ $user_info['new_position'] }}</i>
                </h2>
                <h5 class="chapter">EDUCATION</h5>
                @foreach ($educations_info as $education_info)
                    <p class="info-block">
                        <b>{{ $education_info['name'] }}</b>
                        <span class="info-date"><b>
                            {{ date(MY_DATA_FORMAT_EDUCATION, $education_info['startAt']) }}
                            -
                            {{ date(MY_DATA_FORMAT_EDUCATION, $education_info['endAt']) }}
                        </b></span> <br>
                        {{ $education_info['faculty'] }} <br>
                        Specialty: <i>{{ $education_info['specialty'] }}</i> <br>
                    </p>
                @endforeach

                <h5 class="chapter">WORK EXPERIENCE</h5>

                @foreach ($works_info as $work_info)
                    <p class="info-block">
                        <b>{{ $work_info['name'] }}</b>
                        <span class="info-date"> <b>
                            {{ date(MY_DATA_FORMAT_WORK, $work_info['startAt']) }}
                            -
                            @if($work_info['endAt'] == '')
                                Present
                            @else
                                {{ date(MY_DATA_FORMAT_WORK, $work_info['endAt']) }}
                            @endif
                        </b></span> <br>
                    </p>
                    @foreach($work_info['experiences'] as $experience)
                        <i>{{ $experience['position'] }}</i>
                        <ul>
                            @foreach ($experience['description'] as $point)
                                <li>{{ $point }}</li>
                            @endforeach
                        </ul>
                    @endforeach

                    @if(array_key_exists('achievements', $work_info))
                        <p>{{ $work_info['achievements'] }}</p>
                    @endif
                @endforeach
                <h5 class="chapter">Additional information:</h5>
                <p>{{ $user_info['ADDITIONAL INFORMATION']}}</p>

            </div>
            <div class="added-column">
                <img src="{{$user_info['avatar']}}" alt="avatar" width="100%">
                <h5 class="chapter">CONTACTS</h5>
                <p>
                    @foreach($user_info['additional']['CONTACTS'] as $media => $link)
                        <span>
                            <img class="img-svg small" src="{{ $icons[$media] }}" alt="{{ $media }}">
                        @switch($media)
                                @case('email')
                                <a href="mailto:{{ ' ' . $link }}">
                                @break
                                    @case('mobile')
                                <a href="tel:{{ $link }}">
                                @break
                                    @case('telegram')
                                <a target="_blank" href="https://t.me/{{ $link }}">
                                @break
                                    @case('linkedIn')
                                <a target="_blank" href="https://www.linkedin.com/in/{{ $link }}">
                                @break
                                    @case('github')
                                <a target="_blank" href="https://github.com/{{ $link }}">
                                @break
                                    @endswitch
                                    {{ $link }}
                        </a>
                        <br>
                    </span>

                    @endforeach
                </p>
                <h5 class="chapter">ABOUT</h5>
                <p>
                    Age: {{ $user_info['additional']['ABOUT']['age'] }}<br>
                    City: {{ $user_info['additional']['ABOUT']['city'] }}<br>
                </p>
                <h5 class="chapter">LANGUAGES</h5>
                @foreach($user_info['additional']['LANGUAGES'] as $lang => $level)
                    <div class="row">
                        <span class="main-column">{{ $lang }}</span>
                        <span class="added-column"><b>{{ $level }}</b></span>
                    </div>
                @endforeach
                <h5 class="chapter">HARD&nbsp;SKILLS</h5>
                <div class="row">
                    @foreach($user_info['additional']['HARD SKILLS'] as $skill => $detail)
                        <img class="img-svg" src="{{ $detail['link'] }}" alt="{{ $skill }}">
{{--                        <span style="--}}
{{--                            height: 4em;--}}
{{--                            width: 4em;--}}
{{--                            background-image: url('{{ $detail['link'] }}');--}}
{{--                            background-position: center;--}}
{{--                            background-size: contain;--}}
{{--                            background-repeat: no-repeat;--}}
{{--                            "></span>--}}
                    @endforeach
                </div>
                @foreach($user_info['additional']['HARD SKILLS'] as $skill => $detail)
                    <div class="row">
                        <span class="main-column">
                            {{ $skill }}

                            @if(array_key_exists('version', $detail))
                                {{ $detail['version'] }}
                            @endif
                        </span>
                        <span class="added-column"><b>
                            @if(array_key_exists('experience', $detail))
                                {{ $detail['experience'] }}
                            @endif
                        </b></span>
                    </div>
                @endforeach
                <h5 class="chapter">SOFT&nbsp;SKILLS</h5>
                @foreach($user_info['additional']['SOFT SKILLS'] as $skill)
                    <div class="row">
                        <span>{{ $skill }}</span>
                    </div>
                @endforeach
                <h5 class="chapter">HOBBIES</h5>
                <div class="row">
                    @foreach($user_info['additional']['HOBBIES'] as $hobby_name => $img_link)
                        <img class="img-svg" src="{{$img_link}}" alt="{{ $hobby_name }}">
                    @endforeach
                </div>
            </div>
        </div>
@endsection()
