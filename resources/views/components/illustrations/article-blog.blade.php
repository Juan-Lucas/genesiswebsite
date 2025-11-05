<svg {{ $attributes->merge(['class' => 'w-full h-auto']) }} viewBox="0 0 400 300" fill="none" xmlns="http://www.w3.org/2000/svg">
    <!-- Background -->
    <rect width="400" height="300" fill="#F9FAFB"/>

    <!-- Open book -->
    <g transform="translate(200, 150)">
        <!-- Left page -->
        <path d="M -80 -60 L -80 60 L 0 50 L 0 -50 Z" fill="white" stroke="#E5E7EB" stroke-width="2"/>

        <!-- Right page -->
        <path d="M 0 -50 L 0 50 L 80 60 L 80 -60 Z" fill="white" stroke="#E5E7EB" stroke-width="2"/>

        <!-- Text lines on left page -->
        <g stroke="#667eea" stroke-width="2" opacity="0.6">
            <line x1="-70" y1="-35" x2="-10" y2="-32"/>
            <line x1="-70" y1="-20" x2="-10" y2="-17"/>
            <line x1="-70" y1="-5" x2="-10" y2="-2"/>
            <line x1="-70" y1="10" x2="-10" y2="13"/>
            <line x1="-70" y1="25" x2="-10" y2="28"/>
        </g>

        <!-- Text lines on right page -->
        <g stroke="#764ba2" stroke-width="2" opacity="0.6">
            <line x1="10" y1="-32" x2="70" y2="-35"/>
            <line x1="10" y1="-17" x2="70" y2="-20"/>
            <line x1="10" y1="-2" x2="70" y2="-5"/>
            <line x1="10" y1="13" x2="70" y2="10"/>
            <line x1="10" y1="28" x2="70" y2="25"/>
        </g>

        <!-- Book spine shadow -->
        <rect x="-2" y="-50" width="4" height="100" fill="#1F2937" opacity="0.2"/>

        <!-- Bookmark -->
        <rect x="-20" y="-60" width="8" height="120" fill="#EF4444" opacity="0.8"/>
    </g>

    <!-- Pencil -->
    <g transform="translate(120, 80) rotate(-25)">
        <rect x="0" y="0" width="80" height="12" rx="6" fill="#FCD34D"/>
        <rect x="0" y="3" width="80" height="6" rx="3" fill="#FDE047"/>
        <polygon points="80,0 80,12 95,6" fill="#F59E0B"/>
        <polygon points="95,6 105,6 100,4 100,8" fill="#1F2937"/>

        <!-- Eraser -->
        <rect x="-8" y="2" width="8" height="8" rx="2" fill="#EC4899"/>

        <!-- Metal band -->
        <rect x="-2" y="1" width="4" height="10" fill="#9CA3AF"/>
    </g>

    <!-- Floating elements -->
    <circle cx="320" cy="80" r="15" fill="#667eea" opacity="0.15"/>
    <circle cx="70" cy="230" r="20" fill="#764ba2" opacity="0.15"/>

    <!-- Quotes decoration -->
    <text x="50" y="60" font-size="40" font-weight="bold" fill="#667eea" opacity="0.2">"</text>
    <text x="340" y="250" font-size="40" font-weight="bold" fill="#764ba2" opacity="0.2">"</text>
</svg>
