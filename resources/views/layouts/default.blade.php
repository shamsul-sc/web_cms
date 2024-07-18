<!-- default.blade.php -->
 
<!DOCTYPE html>
<html lang="en">
	<head>
        @include('includes.head')
	</head>
	<body>

		<div class="body">
            @include('includes.header')

			<div role="main" class="main">
                
                @yield('content')

			</div> 

            @include('includes.footer')

		</div>

        @include('includes.script')

	</body>
</html>