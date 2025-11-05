<svg {{ $attributes->merge(['class' => 'w-full h-auto']) }} viewBox="0 0 500 400" fill="none" xmlns="http://www.w3.org/2000/svg">
    <!-- Background -->
    <circle cx="400" cy="100" r="70" fill="#667eea" opacity="0.1"/>
    <circle cx="80" cy="320" r="60" fill="#764ba2" opacity="0.1"/>

    <!-- Desk -->
    <rect x="50" y="280" width="400" height="20" rx="10" fill="#8B7355"/>
    <rect x="60" y="300" width="15" height="80" fill="#6B5345"/>
    <rect x="425" y="300" width="15" height="80" fill="#6B5345"/>

    <!-- Computer screen -->
    <rect x="180" y="150" width="180" height="120" rx="5" fill="#1F2937"/>
    <rect x="190" y="160" width="160" height="100" rx="3" fill="#667eea" opacity="0.3"/>

    <!-- Code lines on screen -->
    <line x1="200" y1="175" x2="280" y2="175" stroke="#667eea" stroke-width="3"/>
    <line x1="200" y1="190" x2="320" y2="190" stroke="#764ba2" stroke-width="3"/>
    <line x1="210" y1="205" x2="300" y2="205" stroke="#667eea" stroke-width="3"/>
    <line x1="210" y1="220" x2="330" y2="220" stroke="#764ba2" stroke-width="3"/>
    <line x1="200" y1="235" x2="290" y2="235" stroke="#667eea" stroke-width="3"/>

    <!-- Monitor stand -->
    <rect x="250" y="270" width="40" height="10" rx="2" fill="#4B5563"/>
    <rect x="230" y="280" width="80" height="5" rx="2" fill="#6B7280"/>

    <!-- Person working -->
    <g transform="translate(320, 180)">
        <!-- Head -->
        <circle cx="0" cy="0" r="25" fill="#FFA07A"/>
        <!-- Hair -->
        <path d="M -20 -5 Q 0 -25 20 -5" fill="#2C3E50"/>
        <!-- Body -->
        <ellipse cx="0" cy="50" rx="35" ry="45" fill="#764ba2"/>
        <!-- Arms -->
        <ellipse cx="-35" cy="45" rx="12" ry="35" fill="#764ba2" transform="rotate(-30 -35 45)"/>
        <ellipse cx="35" cy="45" rx="12" ry="35" fill="#764ba2" transform="rotate(30 35 45)"/>
        <!-- Face -->
        <circle cx="-8" cy="0" r="2" fill="#2C3E50"/>
        <circle cx="8" cy="0" r="2" fill="#2C3E50"/>
        <path d="M -6 8 Q 0 12 6 8" stroke="#2C3E50" stroke-width="1.5" stroke-linecap="round" fill="none"/>
    </g>

    <!-- Coffee cup -->
    <g transform="translate(120, 240)">
        <ellipse cx="0" cy="0" rx="18" ry="6" fill="#667eea" opacity="0.3"/>
        <rect x="-18" y="0" width="36" height="35" rx="3" fill="#667eea"/>
        <path d="M 18 10 Q 30 10 30 20 Q 30 30 18 30" stroke="#667eea" stroke-width="4" fill="none"/>
        <!-- Steam -->
        <path d="M -8 -8 Q -6 -15 -8 -22" stroke="#9CA3AF" stroke-width="2" stroke-linecap="round" opacity="0.6" fill="none"/>
        <path d="M 0 -8 Q 2 -15 0 -22" stroke="#9CA3AF" stroke-width="2" stroke-linecap="round" opacity="0.6" fill="none"/>
        <path d="M 8 -8 Q 10 -15 8 -22" stroke="#9CA3AF" stroke-width="2" stroke-linecap="round" opacity="0.6" fill="none"/>
    </g>

    <!-- Documents/papers -->
    <g transform="translate(380, 220)">
        <rect x="0" y="0" width="50" height="60" rx="3" fill="#F3F4F6" stroke="#D1D5DB" stroke-width="2"/>
        <line x1="8" y1="15" x2="42" y2="15" stroke="#9CA3AF" stroke-width="2"/>
        <line x1="8" y1="25" x2="42" y2="25" stroke="#9CA3AF" stroke-width="2"/>
        <line x1="8" y1="35" x2="35" y2="35" stroke="#9CA3AF" stroke-width="2"/>
    </g>

    <!-- Decorative elements -->
    <circle cx="100" cy="120" r="4" fill="#667eea" opacity="0.5"/>
    <circle cx="420" cy="200" r="5" fill="#764ba2" opacity="0.5"/>
    <circle cx="140" cy="100" r="3" fill="#10B981" opacity="0.6"/>
</svg>
