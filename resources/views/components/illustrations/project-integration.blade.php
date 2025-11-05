<svg {{ $attributes->merge(['class' => 'w-full h-auto']) }} viewBox="0 0 400 300" fill="none" xmlns="http://www.w3.org/2000/svg">
    <!-- Background -->
    <rect width="400" height="300" fill="transparent"/>

    <!-- Central Server -->
    <g transform="translate(200, 150)">
        <!-- Server Rack -->
        <rect x="-50" y="-70" width="100" height="140" rx="8" fill="#1F2937" stroke="#667eea" stroke-width="3"/>

        <!-- Server Units -->
        <g opacity="0.9">
            <!-- Unit 1 -->
            <rect x="-42" y="-60" width="84" height="22" rx="3" fill="#374151" stroke="#667eea" stroke-width="2"/>
            <circle cx="-30" cy="-49" r="3" fill="#10B981"/>
            <circle cx="-20" cy="-49" r="3" fill="#10B981"/>
            <rect x="-5" y="-54" width="35" height="10" rx="2" fill="#667eea" opacity="0.4"/>
            <line x1="10" y1="-52" x2="25" y2="-52" stroke="#E5E7EB" stroke-width="1"/>
            <line x1="10" y1="-50" x2="20" y2="-50" stroke="#E5E7EB" stroke-width="1"/>
            <line x1="10" y1="-48" x2="22" y2="-48" stroke="#E5E7EB" stroke-width="1"/>

            <!-- Unit 2 -->
            <rect x="-42" y="-32" width="84" height="22" rx="3" fill="#374151" stroke="#667eea" stroke-width="2"/>
            <circle cx="-30" cy="-21" r="3" fill="#10B981"/>
            <circle cx="-20" cy="-21" r="3" fill="#F59E0B"/>
            <rect x="-5" y="-26" width="35" height="10" rx="2" fill="#764ba2" opacity="0.4"/>
            <line x1="10" y1="-24" x2="25" y2="-24" stroke="#E5E7EB" stroke-width="1"/>
            <line x1="10" y1="-22" x2="20" y2="-22" stroke="#E5E7EB" stroke-width="1"/>
            <line x1="10" y1="-20" x2="22" y2="-20" stroke="#E5E7EB" stroke-width="1"/>

            <!-- Unit 3 -->
            <rect x="-42" y="-4" width="84" height="22" rx="3" fill="#374151" stroke="#667eea" stroke-width="2"/>
            <circle cx="-30" cy="7" r="3" fill="#10B981"/>
            <circle cx="-20" cy="7" r="3" fill="#10B981"/>
            <rect x="-5" y="2" width="35" height="10" rx="2" fill="#667eea" opacity="0.4"/>
            <line x1="10" y1="4" x2="25" y2="4" stroke="#E5E7EB" stroke-width="1"/>
            <line x1="10" y1="6" x2="20" y2="6" stroke="#E5E7EB" stroke-width="1"/>
            <line x1="10" y1="8" x2="22" y2="8" stroke="#E5E7EB" stroke-width="1"/>

            <!-- Unit 4 -->
            <rect x="-42" y="24" width="84" height="22" rx="3" fill="#374151" stroke="#667eea" stroke-width="2"/>
            <circle cx="-30" cy="35" r="3" fill="#EF4444"/>
            <circle cx="-20" cy="35" r="3" fill="#10B981"/>
            <rect x="-5" y="30" width="35" height="10" rx="2" fill="#764ba2" opacity="0.4"/>
            <line x1="10" y1="32" x2="25" y2="32" stroke="#E5E7EB" stroke-width="1"/>
            <line x1="10" y1="34" x2="20" y2="34" stroke="#E5E7EB" stroke-width="1"/>
            <line x1="10" y1="36" x2="22" y2="36" stroke="#E5E7EB" stroke-width="1"/>

            <!-- Cooling Vents -->
            <line x1="-40" y1="52" x2="-30" y2="52" stroke="#667eea" stroke-width="2" opacity="0.4"/>
            <line x1="-26" y1="52" x2="-16" y2="52" stroke="#667eea" stroke-width="2" opacity="0.4"/>
            <line x1="-12" y1="52" x2="-2" y2="52" stroke="#667eea" stroke-width="2" opacity="0.4"/>
            <line x1="2" y1="52" x2="12" y2="52" stroke="#667eea" stroke-width="2" opacity="0.4"/>
            <line x1="16" y1="52" x2="26" y2="52" stroke="#667eea" stroke-width="2" opacity="0.4"/>
            <line x1="30" y1="52" x2="40" y2="52" stroke="#667eea" stroke-width="2" opacity="0.4"/>
        </g>

        <!-- Shadow -->
        <ellipse cx="0" cy="80" rx="55" ry="10" fill="#667eea" opacity="0.15"/>
    </g>

    <!-- Connection Nodes -->
    <!-- Top Left -->
    <g transform="translate(80, 80)">
        <rect x="-20" y="-20" width="40" height="40" rx="6" fill="#374151" stroke="#764ba2" stroke-width="2"/>
        <circle cx="0" cy="0" r="10" fill="#764ba2" opacity="0.6"/>
        <path d="M-4,-4 L4,4 M-4,4 L4,-4" stroke="#E5E7EB" stroke-width="2"/>
    </g>

    <!-- Top Right -->
    <g transform="translate(320, 80)">
        <rect x="-20" y="-20" width="40" height="40" rx="6" fill="#374151" stroke="#764ba2" stroke-width="2"/>
        <circle cx="0" cy="0" r="10" fill="#764ba2" opacity="0.6"/>
        <circle cx="0" cy="0" r="4" fill="#E5E7EB"/>
    </g>

    <!-- Bottom Left -->
    <g transform="translate(80, 220)">
        <rect x="-20" y="-20" width="40" height="40" rx="6" fill="#374151" stroke="#764ba2" stroke-width="2"/>
        <circle cx="0" cy="0" r="10" fill="#764ba2" opacity="0.6"/>
        <rect x="-5" y="-5" width="10" height="10" fill="#E5E7EB"/>
    </g>

    <!-- Bottom Right -->
    <g transform="translate(320, 220)">
        <rect x="-20" y="-20" width="40" height="40" rx="6" fill="#374151" stroke="#764ba2" stroke-width="2"/>
        <circle cx="0" cy="0" r="10" fill="#764ba2" opacity="0.6"/>
        <path d="M0,-6 L5,0 L0,6 L-5,0 Z" fill="#E5E7EB"/>
    </g>

    <!-- Connection Lines -->
    <path d="M100,80 Q150,80 150,120" stroke="#667eea" stroke-width="2" fill="none" opacity="0.6" stroke-dasharray="5,5"/>
    <path d="M300,80 Q250,80 250,120" stroke="#667eea" stroke-width="2" fill="none" opacity="0.6" stroke-dasharray="5,5"/>
    <path d="M100,220 Q150,220 150,180" stroke="#667eea" stroke-width="2" fill="none" opacity="0.6" stroke-dasharray="5,5"/>
    <path d="M300,220 Q250,220 250,180" stroke="#667eea" stroke-width="2" fill="none" opacity="0.6" stroke-dasharray="5,5"/>

    <!-- Data Flow Indicators -->
    <circle cx="130" cy="100" r="4" fill="#10B981"/>
    <circle cx="270" cy="100" r="4" fill="#10B981"/>
    <circle cx="130" cy="200" r="4" fill="#F59E0B"/>
    <circle cx="270" cy="200" r="4" fill="#F59E0B"/>

    <!-- Floating Icons -->
    <circle cx="40" cy="150" r="12" fill="#667eea" opacity="0.15"/>
    <circle cx="360" cy="150" r="15" fill="#764ba2" opacity="0.2"/>
</svg>
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
