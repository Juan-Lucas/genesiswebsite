<svg {{ $attributes->merge(['class' => 'w-full h-auto']) }} viewBox="0 0 500 400" fill="none" xmlns="http://www.w3.org/2000/svg">
    <!-- Background -->
    <rect width="500" height="400" fill="transparent"/>

    <!-- Desktop Monitor -->
    <g transform="translate(250, 200)">
        <!-- Monitor Stand -->
        <rect x="-30" y="90" width="60" height="15" rx="3" fill="#374151"/>
        <rect x="-15" y="105" width="30" height="25" rx="2" fill="#4B5563"/>

        <!-- Monitor Screen -->
        <rect x="-160" y="-90" width="320" height="180" rx="8" fill="#1F2937" stroke="#667eea" stroke-width="3"/>

        <!-- Screen Content - Project Dashboard -->
        <!-- Header Bar -->
        <rect x="-150" y="-80" width="300" height="20" rx="4" fill="#667eea" opacity="0.2"/>

        <!-- Project Cards Grid -->
        <!-- Card 1 -->
        <g transform="translate(-100, -40)">
            <rect x="0" y="0" width="80" height="60" rx="4" fill="#667eea" opacity="0.3"/>
            <rect x="10" y="10" width="20" height="20" rx="2" fill="#667eea" opacity="0.6"/>
            <rect x="35" y="12" width="35" height="4" rx="2" fill="#E5E7EB"/>
            <rect x="35" y="20" width="25" height="3" rx="1.5" fill="#9CA3AF"/>
        </g>

        <!-- Card 2 -->
        <g transform="translate(30, -40)">
            <rect x="0" y="0" width="80" height="60" rx="4" fill="#764ba2" opacity="0.3"/>
            <rect x="10" y="10" width="20" height="20" rx="2" fill="#764ba2" opacity="0.6"/>
            <rect x="35" y="12" width="35" height="4" rx="2" fill="#E5E7EB"/>
            <rect x="35" y="20" width="25" height="3" rx="1.5" fill="#9CA3AF"/>
        </g>

        <!-- Card 3 -->
        <g transform="translate(-100, 30)">
            <rect x="0" y="0" width="80" height="60" rx="4" fill="#667eea" opacity="0.3"/>
            <rect x="10" y="10" width="20" height="20" rx="2" fill="#667eea" opacity="0.6"/>
            <rect x="35" y="12" width="35" height="4" rx="2" fill="#E5E7EB"/>
            <rect x="35" y="20" width="25" height="3" rx="1.5" fill="#9CA3AF"/>
        </g>

        <!-- Card 4 -->
        <g transform="translate(30, 30)">
            <rect x="0" y="0" width="80" height="60" rx="4" fill="#764ba2" opacity="0.3"/>
            <rect x="10" y="10" width="20" height="20" rx="2" fill="#764ba2" opacity="0.6"/>
            <rect x="35" y="12" width="35" height="4" rx="2" fill="#E5E7EB"/>
            <rect x="35" y="20" width="25" height="3" rx="1.5" fill="#9CA3AF"/>
        </g>

        <!-- Monitor Reflection -->
        <ellipse cx="0" cy="110" rx="140" ry="10" fill="#667eea" opacity="0.1"/>
    </g>

    <!-- Floating Elements -->
    <!-- Code Brackets -->
    <g transform="translate(80, 100)">
        <path d="M0,0 L-10,10 L0,20" stroke="#667eea" stroke-width="3" fill="none" opacity="0.3"/>
        <path d="M20,0 L30,10 L20,20" stroke="#667eea" stroke-width="3" fill="none" opacity="0.3"/>
    </g>

    <!-- Check Mark -->
    <g transform="translate(400, 120)">
        <circle cx="0" cy="0" r="15" fill="#10B981" opacity="0.2"/>
        <path d="M-6,0 L-2,4 L6,-4" stroke="#10B981" stroke-width="2.5" fill="none"/>
    </g>

    <!-- Star Icon -->
    <g transform="translate(420, 280)">
        <path d="M0,-8 L2,-2 L8,-1 L3,3 L4,9 L0,6 L-4,9 L-3,3 L-8,-1 L-2,-2 Z" fill="#F59E0B" opacity="0.3"/>
    </g>

    <!-- Decorative Circles -->
    <circle cx="60" cy="300" r="20" fill="#667eea" opacity="0.1"/>
    <circle cx="90" cy="80" r="15" fill="#764ba2" opacity="0.1"/>
    <circle cx="440" cy="350" r="25" fill="#667eea" opacity="0.1"/>
</svg>
