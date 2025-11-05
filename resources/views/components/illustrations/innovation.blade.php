<svg {{ $attributes->merge(['class' => 'w-full h-auto']) }} viewBox="0 0 500 400" fill="none" xmlns="http://www.w3.org/2000/svg">
    <!-- Background circles -->
    <circle cx="250" cy="200" r="120" fill="#667eea" opacity="0.05"/>
    <circle cx="250" cy="200" r="90" fill="#764ba2" opacity="0.05"/>
    <circle cx="250" cy="200" r="60" fill="#667eea" opacity="0.05"/>

    <!-- Large lightbulb -->
    <g transform="translate(250, 180)">
        <!-- Bulb -->
        <ellipse cx="0" cy="-30" rx="50" ry="60" fill="#FCD34D"/>
        <ellipse cx="0" cy="-30" rx="40" ry="50" fill="#FDE047"/>

        <!-- Filament -->
        <path d="M -15 -35 Q 0 -25 15 -35" stroke="#F59E0B" stroke-width="3" fill="none"/>
        <path d="M -10 -45 Q 0 -35 10 -45" stroke="#F59E0B" stroke-width="3" fill="none"/>

        <!-- Base -->
        <rect x="-25" y="20" width="50" height="8" rx="2" fill="#9CA3AF"/>
        <rect x="-22" y="28" width="44" height="6" rx="2" fill="#6B7280"/>
        <rect x="-22" y="34" width="44" height="6" rx="2" fill="#9CA3AF"/>
        <rect x="-22" y="40" width="44" height="6" rx="2" fill="#6B7280"/>

        <!-- Light rays -->
        <line x1="-70" y1="-30" x2="-90" y2="-30" stroke="#FCD34D" stroke-width="4" stroke-linecap="round" opacity="0.6"/>
        <line x1="70" y1="-30" x2="90" y2="-30" stroke="#FCD34D" stroke-width="4" stroke-linecap="round" opacity="0.6"/>
        <line x1="-50" y1="-70" x2="-65" y2="-90" stroke="#FCD34D" stroke-width="4" stroke-linecap="round" opacity="0.6"/>
        <line x1="50" y1="-70" x2="65" y2="-90" stroke="#FCD34D" stroke-width="4" stroke-linecap="round" opacity="0.6"/>
        <line x1="-50" y1="5" x2="-65" y2="20" stroke="#FCD34D" stroke-width="4" stroke-linecap="round" opacity="0.6"/>
        <line x1="50" y1="5" x2="65" y2="20" stroke="#FCD34D" stroke-width="4" stroke-linecap="round" opacity="0.6"/>
        <line x1="0" y1="-90" x2="0" y2="-110" stroke="#FCD34D" stroke-width="4" stroke-linecap="round" opacity="0.6"/>
    </g>

    <!-- Floating icons around -->
    <g transform="translate(120, 100)">
        <!-- Gear -->
        <circle cx="0" cy="0" r="20" fill="#667eea" opacity="0.8"/>
        <circle cx="0" cy="0" r="10" fill="white"/>
        <rect x="-3" y="-25" width="6" height="10" fill="#667eea" opacity="0.8"/>
        <rect x="-3" y="15" width="6" height="10" fill="#667eea" opacity="0.8"/>
        <rect x="15" y="-3" width="10" height="6" fill="#667eea" opacity="0.8"/>
        <rect x="-25" y="-3" width="10" height="6" fill="#667eea" opacity="0.8"/>
    </g>

    <g transform="translate(380, 120)">
        <!-- Rocket -->
        <ellipse cx="0" cy="0" rx="15" ry="30" fill="#764ba2"/>
        <path d="M -15 10 L -25 30 L 0 20 Z" fill="#EF4444"/>
        <path d="M 15 10 L 25 30 L 0 20 Z" fill="#EF4444"/>
        <circle cx="0" cy="-5" r="6" fill="white" opacity="0.8"/>
        <ellipse cx="0" cy="-22" rx="8" ry="10" fill="#667eea"/>
    </g>

    <g transform="translate(350, 280)">
        <!-- Graph/Chart -->
        <rect x="0" y="30" width="12" height="20" fill="#667eea" opacity="0.7"/>
        <rect x="18" y="15" width="12" height="35" fill="#764ba2" opacity="0.7"/>
        <rect x="36" y="5" width="12" height="45" fill="#10B981" opacity="0.7"/>
        <line x1="0" y1="52" x2="50" y2="52" stroke="#9CA3AF" stroke-width="2"/>
        <line x1="0" y1="0" x2="0" y2="52" stroke="#9CA3AF" stroke-width="2"/>
    </g>

    <g transform="translate(100, 280)">
        <!-- Target -->
        <circle cx="0" cy="0" r="30" fill="none" stroke="#667eea" stroke-width="3" opacity="0.6"/>
        <circle cx="0" cy="0" r="20" fill="none" stroke="#764ba2" stroke-width="3" opacity="0.7"/>
        <circle cx="0" cy="0" r="10" fill="#10B981" opacity="0.8"/>
        <circle cx="0" cy="0" r="4" fill="white"/>
    </g>

    <!-- Decorative sparkles -->
    <g opacity="0.6">
        <path d="M 180 60 L 185 70 L 195 75 L 185 80 L 180 90 L 175 80 L 165 75 L 175 70 Z" fill="#FCD34D"/>
        <path d="M 420 250 L 423 256 L 429 259 L 423 262 L 420 268 L 417 262 L 411 259 L 417 256 Z" fill="#FCD34D"/>
        <path d="M 90 180 L 93 186 L 99 189 L 93 192 L 90 198 L 87 192 L 81 189 L 87 186 Z" fill="#764ba2"/>
    </g>
</svg>
