<svg {{ $attributes->merge(['class' => 'w-full h-auto']) }} viewBox="0 0 400 300" fill="none" xmlns="http://www.w3.org/2000/svg">
    <!-- Background -->
    <rect width="400" height="300" fill="transparent"/>

    <!-- Building Structure -->
    <g transform="translate(200, 150)">
        <!-- Main Building -->
        <rect x="-60" y="-80" width="120" height="140" fill="#1F2937" stroke="#667eea" stroke-width="3"/>

        <!-- Windows Grid -->
        <g opacity="0.9">
            <!-- Floor 1 -->
            <rect x="-50" y="-70" width="20" height="25" rx="2" fill="#667eea" opacity="0.4" stroke="#667eea" stroke-width="1.5"/>
            <rect x="-20" y="-70" width="20" height="25" rx="2" fill="#E5E7EB" stroke="#667eea" stroke-width="1.5"/>
            <rect x="10" y="-70" width="20" height="25" rx="2" fill="#667eea" opacity="0.4" stroke="#667eea" stroke-width="1.5"/>
            <rect x="40" y="-70" width="20" height="25" rx="2" fill="#E5E7EB" stroke="#667eea" stroke-width="1.5"/>

            <!-- Floor 2 -->
            <rect x="-50" y="-38" width="20" height="25" rx="2" fill="#E5E7EB" stroke="#667eea" stroke-width="1.5"/>
            <rect x="-20" y="-38" width="20" height="25" rx="2" fill="#667eea" opacity="0.4" stroke="#667eea" stroke-width="1.5"/>
            <rect x="10" y="-38" width="20" height="25" rx="2" fill="#E5E7EB" stroke="#667eea" stroke-width="1.5"/>
            <rect x="40" y="-38" width="20" height="25" rx="2" fill="#667eea" opacity="0.4" stroke="#667eea" stroke-width="1.5"/>

            <!-- Floor 3 -->
            <rect x="-50" y="-6" width="20" height="25" rx="2" fill="#667eea" opacity="0.4" stroke="#667eea" stroke-width="1.5"/>
            <rect x="-20" y="-6" width="20" height="25" rx="2" fill="#E5E7EB" stroke="#667eea" stroke-width="1.5"/>
            <rect x="10" y="-6" width="20" height="25" rx="2" fill="#667eea" opacity="0.4" stroke="#667eea" stroke-width="1.5"/>
            <rect x="40" y="-6" width="20" height="25" rx="2" fill="#E5E7EB" stroke="#667eea" stroke-width="1.5"/>

            <!-- Ground Floor Entrance -->
            <rect x="-15" y="26" width="30" height="34" rx="3" fill="#764ba2" opacity="0.6" stroke="#764ba2" stroke-width="2"/>
            <rect x="-12" y="30" width="24" height="25" fill="#E5E7EB" opacity="0.8"/>
            <line x1="0" y1="30" x2="0" y2="55" stroke="#764ba2" stroke-width="2"/>
            <circle cx="5" cy="42" r="2" fill="#764ba2"/>
        </g>

        <!-- Roof -->
        <path d="M-70,-80 L0,-110 L70,-80 Z" fill="#374151" stroke="#667eea" stroke-width="3"/>
        <path d="M-10,-100 L10,-100 L10,-115 L-10,-115 Z" fill="#764ba2" opacity="0.6" stroke="#764ba2" stroke-width="2"/>

        <!-- Building Shadow -->
        <ellipse cx="0" cy="70" rx="70" ry="12" fill="#667eea" opacity="0.15"/>
    </g>

    <!-- Left Wing -->
    <g transform="translate(120, 180)">
        <rect x="-25" y="-50" width="50" height="90" fill="#374151" stroke="#764ba2" stroke-width="2"/>
        <rect x="-18" y="-42" width="15" height="18" rx="1" fill="#764ba2" opacity="0.4" stroke="#764ba2" stroke-width="1"/>
        <rect x="3" y="-42" width="15" height="18" rx="1" fill="#E5E7EB" stroke="#764ba2" stroke-width="1"/>
        <rect x="-18" y="-18" width="15" height="18" rx="1" fill="#E5E7EB" stroke="#764ba2" stroke-width="1"/>
        <rect x="3" y="-18" width="15" height="18" rx="1" fill="#764ba2" opacity="0.4" stroke="#764ba2" stroke-width="1"/>
    </g>

    <!-- Right Wing -->
    <g transform="translate(280, 180)">
        <rect x="-25" y="-50" width="50" height="90" fill="#374151" stroke="#764ba2" stroke-width="2"/>
        <rect x="-18" y="-42" width="15" height="18" rx="1" fill="#E5E7EB" stroke="#764ba2" stroke-width="1"/>
        <rect x="3" y="-42" width="15" height="18" rx="1" fill="#764ba2" opacity="0.4" stroke="#764ba2" stroke-width="1"/>
        <rect x="-18" y="-18" width="15" height="18" rx="1" fill="#764ba2" opacity="0.4" stroke="#764ba2" stroke-width="1"/>
        <rect x="3" y="-18" width="15" height="18" rx="1" fill="#E5E7EB" stroke="#764ba2" stroke-width="1"/>
    </g>

    <!-- Blueprint Grid Lines -->
    <line x1="50" y1="250" x2="120" y2="250" stroke="#667eea" stroke-width="1" opacity="0.3" stroke-dasharray="5,5"/>
    <line x1="280" y1="250" x2="350" y2="250" stroke="#667eea" stroke-width="1" opacity="0.3" stroke-dasharray="5,5"/>

    <!-- Floating Icons -->
    <circle cx="80" cy="80" r="15" fill="#667eea" opacity="0.15"/>
    <circle cx="330" cy="100" r="12" fill="#764ba2" opacity="0.2"/>
    <rect x="320" y="230" width="18" height="18" rx="2" fill="#667eea" opacity="0.15" transform="rotate(20 329 239)"/>
</svg>
    <!-- Background -->
    <rect width="400" height="300" fill="#F9FAFB"/>

    <!-- Building -->
    <g transform="translate(200, 200)">
        <!-- Main building -->
        <rect x="-70" y="-120" width="140" height="120" fill="#667eea"/>
        <rect x="-65" y="-115" width="130" height="110" fill="#7C3AED"/>

        <!-- Windows pattern -->
        <g fill="white" opacity="0.3">
            <rect x="-55" y="-105" width="15" height="20" rx="2"/>
            <rect x="-30" y="-105" width="15" height="20" rx="2"/>
            <rect x="-5" y="-105" width="15" height="20" rx="2"/>
            <rect x="20" y="-105" width="15" height="20" rx="2"/>
            <rect x="45" y="-105" width="15" height="20" rx="2"/>

            <rect x="-55" y="-75" width="15" height="20" rx="2"/>
            <rect x="-30" y="-75" width="15" height="20" rx="2"/>
            <rect x="-5" y="-75" width="15" height="20" rx="2"/>
            <rect x="20" y="-75" width="15" height="20" rx="2"/>
            <rect x="45" y="-75" width="15" height="20" rx="2"/>

            <rect x="-55" y="-45" width="15" height="20" rx="2"/>
            <rect x="-30" y="-45" width="15" height="20" rx="2"/>
            <rect x="-5" y="-45" width="15" height="20" rx="2"/>
            <rect x="20" y="-45" width="15" height="20" rx="2"/>
            <rect x="45" y="-45" width="15" height="20" rx="2"/>
        </g>

        <!-- Entrance -->
        <rect x="-25" y="-20" width="50" height="20" fill="#1F2937"/>
        <circle cx="15" cy="-10" r="2" fill="#FCD34D"/>

        <!-- Roof detail -->
        <polygon points="-75,-120 0,-150 75,-120" fill="#764ba2"/>

        <!-- Side building -->
        <rect x="75" y="-80" width="60" height="80" fill="#9333EA"/>
        <g fill="white" opacity="0.3">
            <rect x="85" y="-70" width="12" height="15" rx="2"/>
            <rect x="105" y="-70" width="12" height="15" rx="2"/>
            <rect x="85" y="-45" width="12" height="15" rx="2"/>
            <rect x="105" y="-45" width="12" height="15" rx="2"/>
        </g>
    </g>

    <!-- Trees -->
    <g transform="translate(80, 230)">
        <rect x="-5" y="-20" width="10" height="20" fill="#78350F"/>
        <circle cx="0" cy="-30" r="18" fill="#10B981"/>
        <circle cx="-8" cy="-25" r="12" fill="#059669"/>
        <circle cx="8" cy="-25" r="12" fill="#059669"/>
    </g>

    <circle cx="320" cy="80" r="20" fill="#667eea" opacity="0.1"/>
</svg>
