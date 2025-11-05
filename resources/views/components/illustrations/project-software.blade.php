<svg {{ $attributes->merge(['class' => 'w-full h-auto']) }} viewBox="0 0 400 300" fill="none" xmlns="http://www.w3.org/2000/svg">
    <!-- Background -->
    <rect width="400" height="300" fill="#F9FAFB"/>

    <!-- Laptop -->
    <g transform="translate(200, 180)">
        <!-- Screen -->
        <rect x="-90" y="-80" width="180" height="110" rx="8" fill="#1F2937"/>
        <rect x="-85" y="-75" width="170" height="100" rx="5" fill="#667eea" opacity="0.2"/>

        <!-- Code on screen -->
        <g fill="#667eea">
            <rect x="-75" y="-65" width="40" height="4" rx="2"/>
            <rect x="-75" y="-55" width="60" height="4" rx="2"/>
            <rect x="-70" y="-45" width="50" height="4" rx="2"/>
            <rect x="-75" y="-35" width="70" height="4" rx="2"/>
            <rect x="-70" y="-25" width="45" height="4" rx="2"/>
        </g>
        <g fill="#764ba2">
            <rect x="10" y="-65" width="55" height="4" rx="2"/>
            <rect x="10" y="-55" width="40" height="4" rx="2"/>
            <rect x="10" y="-45" width="60" height="4" rx="2"/>
            <rect x="10" y="-35" width="45" height="4" rx="2"/>
        </g>

        <!-- Keyboard base -->
        <path d="M -100 30 L -90 30 L -85 50 L 85 50 L 90 30 L 100 30 L 95 55 L -95 55 Z" fill="#374151"/>

        <!-- Keyboard -->
        <rect x="-80" y="35" width="160" height="15" rx="2" fill="#4B5563"/>

        <!-- Trackpad -->
        <rect x="-30" y="38" width="60" height="8" rx="2" fill="#6B7280"/>
    </g>

    <!-- Floating code brackets -->
    <g transform="translate(80, 100)">
        <text x="0" y="0" font-size="40" font-weight="bold" fill="#667eea" opacity="0.3">&lt;/&gt;</text>
    </g>

    <g transform="translate(300, 80)">
        <text x="0" y="0" font-size="30" font-weight="bold" fill="#764ba2" opacity="0.3">{}</text>
    </g>

    <!-- Binary decoration -->
    <g fill="#10B981" opacity="0.2" font-size="14" font-family="monospace">
        <text x="50" y="250">01</text>
        <text x="330" y="240">10</text>
        <text x="90" y="70">11</text>
    </g>
</svg>
