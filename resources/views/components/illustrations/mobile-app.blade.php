<svg {{ $attributes->merge(['class' => 'w-full h-auto']) }} viewBox="0 0 500 400" fill="none" xmlns="http://www.w3.org/2000/svg">
    <!-- Background -->
    <circle cx="250" cy="200" r="150" fill="#667eea" opacity="0.05"/>

    <!-- Mobile phone -->
    <g transform="translate(200, 120)">
        <rect x="0" y="0" width="120" height="220" rx="15" fill="#1F2937"/>
        <rect x="8" y="25" width="104" height="170" rx="5" fill="#667eea" opacity="0.2"/>

        <!-- Screen content -->
        <rect x="20" y="40" width="80" height="8" rx="4" fill="#667eea"/>
        <rect x="20" y="60" width="60" height="6" rx="3" fill="#764ba2" opacity="0.6"/>
        <rect x="20" y="75" width="70" height="6" rx="3" fill="#764ba2" opacity="0.6"/>

        <!-- App icons -->
        <rect x="20" y="95" width="30" height="30" rx="8" fill="#667eea"/>
        <rect x="58" y="95" width="30" height="30" rx="8" fill="#10B981"/>
        <rect x="20" y="133" width="30" height="30" rx="8" fill="#764ba2"/>
        <rect x="58" y="133" width="30" height="30" rx="8" fill="#F59E0B"/>

        <!-- Notch -->
        <rect x="45" y="8" width="30" height="8" rx="4" fill="#374151"/>

        <!-- Home button area -->
        <rect x="50" y="205" width="20" height="4" rx="2" fill="#4B5563"/>
    </g>

    <!-- Hand holding phone -->
    <g transform="translate(200, 300)">
        <!-- Palm -->
        <ellipse cx="60" cy="40" rx="35" ry="45" fill="#FFA07A"/>
        <!-- Thumb -->
        <ellipse cx="15" cy="40" rx="18" ry="30" fill="#FFA07A" transform="rotate(-20 15 40)"/>
        <!-- Fingers -->
        <rect x="80" y="10" width="15" height="40" rx="7" fill="#FFA07A"/>
        <rect x="98" y="15" width="15" height="35" rx="7" fill="#FFA07A"/>
        <rect x="115" y="20" width="13" height="30" rx="6" fill="#FFA07A"/>
    </g>

    <!-- Floating elements -->
    <g transform="translate(350, 150)">
        <!-- Message bubble -->
        <rect x="0" y="0" width="80" height="50" rx="15" fill="#667eea" opacity="0.8"/>
        <path d="M 20 50 L 30 65 L 30 50 Z" fill="#667eea" opacity="0.8"/>
        <line x1="15" y1="20" x2="65" y2="20" stroke="white" stroke-width="3" stroke-linecap="round"/>
        <line x1="15" y1="33" x2="50" y2="33" stroke="white" stroke-width="3" stroke-linecap="round"/>
    </g>

    <g transform="translate(90, 180)">
        <!-- Notification bell -->
        <path d="M 20 0 L 10 10 L 10 30 Q 10 40 20 40 L 40 40 Q 50 40 50 30 L 50 10 L 40 0 Z" fill="#764ba2"/>
        <ellipse cx="30" cy="42" rx="8" ry="4" fill="#764ba2"/>
        <circle cx="45" cy="8" r="8" fill="#EF4444"/>
        <text x="42" y="12" fill="white" font-size="10" font-weight="bold">3</text>
    </g>

    <!-- WiFi signal -->
    <g transform="translate(120, 100)" opacity="0.6">
        <path d="M 0 30 Q -20 10 -40 5" stroke="#667eea" stroke-width="4" stroke-linecap="round" fill="none"/>
        <path d="M 0 30 Q 20 10 40 5" stroke="#667eea" stroke-width="4" stroke-linecap="round" fill="none"/>
        <path d="M 0 30 Q -10 20 -20 18" stroke="#667eea" stroke-width="4" stroke-linecap="round" fill="none"/>
        <path d="M 0 30 Q 10 20 20 18" stroke="#667eea" stroke-width="4" stroke-linecap="round" fill="none"/>
        <circle cx="0" cy="32" r="4" fill="#667eea"/>
    </g>

    <!-- Cloud -->
    <g transform="translate(380, 80)" opacity="0.4">
        <ellipse cx="0" cy="10" rx="25" ry="15" fill="#9CA3AF"/>
        <ellipse cx="25" cy="10" rx="20" ry="13" fill="#9CA3AF"/>
        <ellipse cx="12" cy="0" rx="18" ry="12" fill="#9CA3AF"/>
    </g>
</svg>
