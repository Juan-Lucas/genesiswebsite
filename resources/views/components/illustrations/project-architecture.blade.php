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
