declare global {
	interface Window {
		wcSettings: {
			preloadOptions: Record< string, unknown >;
		};
	}
}

/*~ If your module exports nothing, you'll need this line. Otherwise, delete it */
export {};
