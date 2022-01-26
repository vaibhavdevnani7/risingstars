import Web3 from 'web3';

// For Ropsten network 
const METAMASK_NETWORK = 'ropsten'

// For Main network 
const METAMASK_NETWORK = 'main'

// MetaMask Network Setup
const setUpMetaMask = (): Promise<any> => {
   let web3: Web3 | undefined = undefined;
	return new Promise(async (resolve, reject) => {

		// Check if MetaMask is installed
		if (!(window as any).ethereum) {
			reject("Please install MetaMask first.");
		}

		if (!web3) {
			try {
				// Request account access if needed
				await (window as any).ethereum.enable();
				// We don't know window.web3 version, so we use our own instance of Web3
				// with the injected provider given by MetaMask
				web3 = new Web3((window as any).ethereum);
			} catch (error) {
				reject("You need to allow MetaMask.");
			}
		} else {
			reject("Unable to load MetaMask.");
		}

		// Fetch all accounts
		const getAccount = await web3!.eth.getAccounts();
		console.log("Accounts list", getAccount);


		const gasPrice = await web3!.eth.getGasPrice();

		const value = web3!.utils.toWei("0.000032");

		// Send Transaction
		const sendTransaction = await web3!.eth
			.sendTransaction({
				from: getAccount[0],
				to: "0xC9A80Ec5eED5DdE2483936aEAc78ff4497487B5c",
				value: value,
				gasPrice: gasPrice,
				gas: "0x2710",
			})
			.then((txHash: any) => console.log(txHash));

		const network = await web3!.eth.net.getNetworkType();


		// Get network type
		const network = await web3!.eth.net.getNetworkType();

		const allowedNetwork: any =
			METAMASK_NETWORK ;

		if (network === allowedNetwork) {
			const address = await web3!.eth.getCoinbase();
			if (address) {
				const getEthBalance = await web3!.eth.getBalance(address);
				const balance = await web3!.utils.fromWei(getEthBalance);
				resolve({
					address: address.toLowerCase(),
					balance,
					web3,
				});
			} else {
				reject("Please create new ethereum account");
			}
		} else {
			if (allowedNetwork == "ropsten") {
				reject("Please switch ethereum network into Ropsten Network in MetaMask");
			} else {
				reject("Please switch ethereum network into Main Network in MetaMask");
			}
		}
	});
};



