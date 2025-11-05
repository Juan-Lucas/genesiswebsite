<svg {{ $attributes->merge(['class' => 'w-full h-auto']) }} viewBox="0 0 400 300" fill="none" xmlns="http://www.w3.org/2000/svg">
    <!-- Background -->
    <rect width="400" height="300" fill="#F9FAFB"/>

    <!-- Server racks -->
    <g transform="translate(200, 150)">
        <!-- Left server -->
        <g transform="translate(-60, 0)">
            <rect x="-35" y="-70" width="70" height="140" rx="5" fill="#1F2937"/>

            <!-- Server units -->
            <rect x="-30" y="-60" width="60" height="25" rx="3" fill="#374151"/>
            <rect x="-30" y="-30" width="60" height="25" rx="3" fill="#374151"/>
            <rect x="-30" y="0" width="60" height="25" rx="3" fill="#374151"/>
            <rect x="-30" y="30" width="60" height="25" rx="3" fill="#374151"/>

            <!-- LED indicators -->
            <circle cx="-20" cy="-47" r="2" fill="#10B981" class="animate-pulse"/>
            <circle cx="-10" cy="-47" r="2" fill="#667eea" class="animate-pulse"/>
            <circle cx="-20" cy="-17" r="2" fill="#10B981"/>
            <circle cx="-10" cy="-17" r="2" fill="#667eea" class="animate-pulse"/>
            <circle cx="-20" cy="13" r="2" fill="#10B981" class="animate-pulse"/>
            <circle cx="-10" cy="13" r="2" fill="#667eea"/>
            <circle cx="-20" cy="43" r="2" fill="#10B981"/>
            <circle cx="-10" cy="43" r="2" fill="#667eea" class="animate-pulse"/>
        </g>

        <!-- Right server -->
        <g transform="translate(60, 0)">
            <rect x="-35" y="-70" width="70" height="140" rx="5" fill="#1F2937"/>

            <!-- Server units -->
            <rect x="-30" y="-60" width="60" height="25" rx="3" fill="#374151"/>
            <rect x="-30" y="-30" width="60" height="25" rx="3" fill="#374151"/>
            <rect x="-30" y="0" width="60" height="25" rx="3" fill="#374151"/>
            <rect x="-30" y="30" width="60" height="25" rx="3" fill="#374151"/>

            <!-- LED indicators -->
            <circle cx="-20" cy="-47" r="2" fill="#10B981" class="animate-pulse"/>
            <circle cx="-10" cy="-47" r="2" fill="#764ba2"/>
            <circle cx="-20" cy="-17" r="2" fill="#10B981" class="animate-pulse"/>
            <circle cx="-10" cy="-17" r="2" fill="#764ba2" class="animate-pulse"/>
            <circle cx="-20" cy="13" r="2" fill="#10B981"/>
            <circle cx="-10" cy="13" r="2" fill="#764ba2" class="animate-pulse"/>
            <circle cx="-20" cy="43" r="2" fill="#10B981" class="animate-pulse"/>
            <circle cx="-10" cy="43" r="2" fill="#764ba2"/>
        </g>
    </g>

    <!-- Connection lines -->
    <g stroke="#667eea" stroke-width="2" opacity="0.4">
        <path d="M 140 150 Q 200 120 260 150" fill="none" stroke-dasharray="5,5">
            <animate attributeName="stroke-dashoffset" from="0" to="10" dur="1s" repeatCount="indefinite"/>
        </path>
        <path d="M 140 180 Q 200 210 260 180" fill="none" stroke-dasharray="5,5">
            <animate attributeName="stroke-dashoffset" from="0" to="10" dur="1s" repeatCount="indefinite"/>
        </path>
    </g>

    <!-- Data flow indicators -->
    <circle cx="100" cy="100" r="15" fill="#667eea" opacity="0.2"/>
    <circle cx="300" cy="220" r="20" fill="#764ba2" opacity="0.2"/>
    <circle cx="320" cy="80" r="12" fill="#10B981" opacity="0.2"/>
</svg>
