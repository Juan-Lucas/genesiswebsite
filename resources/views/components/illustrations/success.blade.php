<svg {{ $attributes->merge(['class' => 'w-full h-auto']) }} viewBox="0 0 500 400" fill="none" xmlns="http://www.w3.org/2000/svg">
    <!-- Background elements -->
    <circle cx="100" cy="100" r="50" fill="#10B981" opacity="0.1"/>
    <circle cx="400" cy="300" r="70" fill="#667eea" opacity="0.1"/>

    <!-- Person celebrating -->
    <g transform="translate(200, 180)">
        <!-- Head -->
        <circle cx="0" cy="0" r="30" fill="#FFA07A"/>
        <!-- Hair -->
        <ellipse cx="0" cy="-12" rx="32" ry="22" fill="#2C3E50"/>
        <!-- Face -->
        <circle cx="-10" cy="0" r="3" fill="#2C3E50"/>
        <circle cx="10" cy="0" r="3" fill="#2C3E50"/>
        <path d="M -12 12 Q 0 20 12 12" stroke="#2C3E50" stroke-width="2.5" stroke-linecap="round" fill="none"/>

        <!-- Body -->
        <ellipse cx="0" cy="65" rx="40" ry="50" fill="#667eea"/>

        <!-- Arms raised -->
        <ellipse cx="-45" cy="45" rx="14" ry="40" fill="#667eea" transform="rotate(-45 -45 45)"/>
        <ellipse cx="45" cy="45" rx="14" ry="40" fill="#667eea" transform="rotate(45 45 45)"/>

        <!-- Hands -->
        <circle cx="-65" cy="20" r="10" fill="#FFA07A"/>
        <circle cx="65" cy="20" r="10" fill="#FFA07A"/>

        <!-- Legs -->
        <ellipse cx="-15" cy="125" rx="12" ry="35" fill="#2C3E50"/>
        <ellipse cx="15" cy="125" rx="12" ry="35" fill="#2C3E50"/>

        <!-- Shoes -->
        <ellipse cx="-15" cy="160" rx="15" ry="8" fill="#1F2937"/>
        <ellipse cx="15" cy="160" rx="15" ry="8" fill="#1F2937"/>
    </g>

    <!-- Trophy -->
    <g transform="translate(330, 220)">
        <!-- Cup -->
        <path d="M -25 0 L -20 40 L 20 40 L 25 0 Z" fill="#FCD34D"/>
        <ellipse cx="0" cy="0" rx="25" ry="8" fill="#F59E0B"/>

        <!-- Handles -->
        <path d="M -25 10 Q -40 10 -40 20 Q -40 30 -25 30" stroke="#F59E0B" stroke-width="5" fill="none"/>
        <path d="M 25 10 Q 40 10 40 20 Q 40 30 25 30" stroke="#F59E0B" stroke-width="5" fill="none"/>

        <!-- Base -->
        <rect x="-8" y="40" width="16" height="15" fill="#F59E0B"/>
        <rect x="-20" y="55" width="40" height="8" rx="4" fill="#F59E0B"/>

        <!-- Shine -->
        <ellipse cx="-8" cy="15" rx="6" ry="10" fill="#FEF3C7" opacity="0.6"/>
    </g>

    <!-- Confetti -->
    <g opacity="0.8">
        <!-- Blue -->
        <rect x="150" y="80" width="8" height="15" fill="#667eea" transform="rotate(25 154 87)"/>
        <rect x="280" y="60" width="8" height="15" fill="#667eea" transform="rotate(-30 284 67)"/>
        <rect x="190" y="120" width="10" height="18" fill="#667eea" transform="rotate(45 195 129)"/>

        <!-- Purple -->
        <rect x="240" y="90" width="8" height="15" fill="#764ba2" transform="rotate(-15 244 97)"/>
        <rect x="320" y="110" width="10" height="18" fill="#764ba2" transform="rotate(60 325 119)"/>
        <rect x="170" y="70" width="8" height="15" fill="#764ba2" transform="rotate(75 174 77)"/>

        <!-- Green -->
        <circle cx="210" cy="85" r="5" fill="#10B981"/>
        <circle cx="270" cy="100" r="6" fill="#10B981"/>
        <circle cx="300" cy="75" r="4" fill="#10B981"/>

        <!-- Yellow -->
        <circle cx="230" cy="70" r="5" fill="#FCD34D"/>
        <circle cx="290" cy="85" r="4" fill="#FCD34D"/>
        <circle cx="180" cy="95" r="6" fill="#FCD34D"/>

        <!-- Ribbons -->
        <path d="M 260 105 Q 265 115 260 125" stroke="#EF4444" stroke-width="4" fill="none"/>
        <path d="M 200 100 Q 195 110 200 120" stroke="#EF4444" stroke-width="4" fill="none"/>
    </g>

    <!-- Stars -->
    <g opacity="0.7">
        <path d="M 140 140 L 145 150 L 155 155 L 145 160 L 140 170 L 135 160 L 125 155 L 135 150 Z" fill="#FCD34D"/>
        <path d="M 350 160 L 353 166 L 359 169 L 353 172 L 350 178 L 347 172 L 341 169 L 347 166 Z" fill="#FCD34D"/>
        <path d="M 310 130 L 313 136 L 319 139 L 313 142 L 310 148 L 307 142 L 301 139 L 307 136 Z" fill="#667eea"/>
    </g>

    <!-- Medal/Badge -->
    <g transform="translate(100, 260)">
        <circle cx="0" cy="20" r="25" fill="#10B981"/>
        <circle cx="0" cy="20" r="18" fill="#059669"/>
        <path d="M -5 20 L 0 28 L 5 20 L 8 24 L 0 15 L -8 24 Z" fill="#ECFDF5"/>
        <!-- Ribbon -->
        <path d="M -15 0 L -10 20 L 0 5 Z" fill="#667eea"/>
        <path d="M 15 0 L 10 20 L 0 5 Z" fill="#764ba2"/>
    </g>
</svg>
