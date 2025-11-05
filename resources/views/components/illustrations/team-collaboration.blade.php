<svg {{ $attributes->merge(['class' => 'w-full h-auto']) }} viewBox="0 0 500 400" fill="none" xmlns="http://www.w3.org/2000/svg">
    <!-- Background elements -->
    <circle cx="100" cy="100" r="60" fill="#667eea" opacity="0.1"/>
    <circle cx="400" cy="320" r="80" fill="#764ba2" opacity="0.1"/>

    <!-- Person 1 (left) -->
    <g transform="translate(120, 180)">
        <!-- Body -->
        <rect x="20" y="80" width="60" height="100" rx="30" fill="#667eea"/>
        <!-- Arm raised -->
        <path d="M 35 90 Q 20 60 30 40" stroke="#667eea" stroke-width="12" stroke-linecap="round" fill="none"/>
        <!-- Head -->
        <circle cx="50" cy="50" r="30" fill="#FFA07A"/>
        <!-- Hair -->
        <path d="M 30 35 Q 50 20 70 35" fill="#2C3E50"/>
        <!-- Face details -->
        <circle cx="42" cy="48" r="3" fill="#2C3E50"/>
        <circle cx="58" cy="48" r="3" fill="#2C3E50"/>
        <path d="M 42 60 Q 50 65 58 60" stroke="#2C3E50" stroke-width="2" stroke-linecap="round" fill="none"/>
        <!-- Legs -->
        <rect x="25" y="180" width="20" height="60" rx="10" fill="#2C3E50"/>
        <rect x="55" y="180" width="20" height="60" rx="10" fill="#2C3E50"/>
    </g>

    <!-- Person 2 (right) -->
    <g transform="translate(280, 180)">
        <!-- Body -->
        <rect x="20" y="80" width="60" height="100" rx="30" fill="#764ba2"/>
        <!-- Arm raised -->
        <path d="M 65 90 Q 80 60 70 40" stroke="#764ba2" stroke-width="12" stroke-linecap="round" fill="none"/>
        <!-- Head -->
        <circle cx="50" cy="50" r="30" fill="#D2A679"/>
        <!-- Hair -->
        <ellipse cx="50" cy="30" rx="32" ry="25" fill="#1A1A1A"/>
        <!-- Face details -->
        <circle cx="42" cy="48" r="3" fill="#1A1A1A"/>
        <circle cx="58" cy="48" r="3" fill="#1A1A1A"/>
        <path d="M 42 60 Q 50 65 58 60" stroke="#1A1A1A" stroke-width="2" stroke-linecap="round" fill="none"/>
        <!-- Legs -->
        <rect x="25" y="180" width="20" height="60" rx="10" fill="#2C3E50"/>
        <rect x="55" y="180" width="20" height="60" rx="10" fill="#2C3E50"/>
    </g>

    <!-- High five effect -->
    <g transform="translate(250, 100)">
        <circle cx="0" cy="0" r="8" fill="#667eea" opacity="0.6"/>
        <circle cx="-15" cy="-10" r="5" fill="#764ba2" opacity="0.5"/>
        <circle cx="15" cy="-8" r="6" fill="#667eea" opacity="0.5"/>
        <circle cx="-10" cy="12" r="4" fill="#764ba2" opacity="0.4"/>
        <circle cx="12" cy="10" r="5" fill="#667eea" opacity="0.4"/>
    </g>

    <!-- Decorative plant -->
    <g transform="translate(420, 300)">
        <!-- Pot -->
        <path d="M 0 30 L 10 50 L -10 50 Z" fill="#667eea" opacity="0.3"/>
        <!-- Leaves -->
        <ellipse cx="-5" cy="20" rx="8" ry="15" fill="#10B981" opacity="0.7"/>
        <ellipse cx="5" cy="15" rx="8" ry="15" fill="#10B981" opacity="0.8"/>
        <ellipse cx="0" cy="10" rx="8" ry="15" fill="#10B981"/>
    </g>

    <!-- Window frame -->
    <g transform="translate(50, 50)">
        <rect x="0" y="0" width="80" height="100" rx="5" fill="none" stroke="#E5E7EB" stroke-width="8"/>
        <line x1="0" y1="50" x2="80" y2="50" stroke="#E5E7EB" stroke-width="6"/>
        <line x1="40" y1="0" x2="40" y2="100" stroke="#E5E7EB" stroke-width="6"/>
    </g>
</svg>
