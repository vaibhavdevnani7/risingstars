//const web3 = require('https://cdn.jsdelivr.net/npm/web3@latest/dist/web3.min.js');
//let web3 = new Web3('https://cdn.jsdelivr.net/npm/web3@latest/dist/web3.min.js');
let mode;
let addressFound = false;
let newWeb3 =new Web3(window.ethereum);
async function getMode() {
  mode = await newWeb3.eth.net.getNetworkType();
}
getMode();


const abi = [
  {
    inputs: [],
    stateMutability: 'nonpayable',
    type: 'constructor',
  },
  {
    anonymous: false,
    inputs: [
      {
        indexed: true,
        internalType: 'address',
        name: 'oldCreator',
        type: 'address',
      },
      {
        indexed: true,
        internalType: 'address',
        name: 'newCreator',
        type: 'address',
      },
    ],
    name: 'CreatorSet',
    type: 'event',
  },
  {
    anonymous: false,
    inputs: [
      {
        indexed: false,
        internalType: 'address',
        name: 'buyer',
        type: 'address',
      },
      {
        indexed: false,
        internalType: 'uint256',
        name: 'amount',
        type: 'uint256',
      },
      {
        indexed: false,
        internalType: 'uint256',
        name: 'count',
        type: 'uint256',
      },
    ],
    name: 'MintLegend',
    type: 'event',
  },
  {
    anonymous: false,
    inputs: [
      {
        indexed: true,
        internalType: 'address',
        name: 'previousCreator',
        type: 'address',
      },
      {
        indexed: true,
        internalType: 'address',
        name: 'newCreator',
        type: 'address',
      },
    ],
    name: 'OwnershipTransfer',
    type: 'event',
  },
  {
    inputs: [
      {
        internalType: 'address',
        name: 'newCreator',
        type: 'address',
      },
    ],
    name: '_setCreator',
    outputs: [],
    stateMutability: 'nonpayable',
    type: 'function',
  },
  {
    inputs: [],
    name: 'creator',
    outputs: [
      {
        internalType: 'address',
        name: '',
        type: 'address',
      },
    ],
    stateMutability: 'view',
    type: 'function',
  },
  {
    inputs: [],
    name: 'getBalance',
    outputs: [
      {
        internalType: 'uint256',
        name: 'balance',
        type: 'uint256',
      },
    ],
    stateMutability: 'view',
    type: 'function',
  },
  {
    inputs: [],
    name: 'getCreator',
    outputs: [
      {
        internalType: 'address',
        name: '',
        type: 'address',
      },
    ],
    stateMutability: 'view',
    type: 'function',
  },
  {
    inputs: [
      {
        internalType: 'uint256',
        name: 'count',
        type: 'uint256',
      },
    ],
    name: 'mintLegend',
    outputs: [],
    stateMutability: 'payable',
    type: 'function',
  },
  {
    inputs: [],
    name: 'totalNFTTransfer',
    outputs: [
      {
        internalType: 'uint256',
        name: '',
        type: 'uint256',
      },
    ],
    stateMutability: 'view',
    type: 'function',
  },
  {
    inputs: [
      {
        internalType: 'address payable',
        name: '_to',
        type: 'address',
      },
      {
        internalType: 'uint256',
        name: 'amount',
        type: 'uint256',
      },
    ],
    name: 'withdraw',
    outputs: [],
    stateMutability: 'payable',
    type: 'function',
  },
];

let senderEthereumAddress;
let accounts;
let ethereumButton = document.querySelector('#connect-metamask');

if (typeof window.ethereum !== 'undefined') {
    
    console.log('MetaMask is installed!');
    
    ethereumButton.addEventListener('click', () => {
      getAccount();
    });

    async function getAccount() {
      const accounts = await ethereum.request({ method: 'eth_requestAccounts' });
      senderEthereumAddress = accounts[0];
      
      console.log(senderEthereumAddress);

      addressFound = true;
      $(document).find('#mint-form').css('display','block');
      $(document).find('.metamask-section').css('display','none');


      // $.ajax({
      //     url: baseUrl+"/check-preregister-address",
      //     data: {'address':senderEthereumAddress},
      //     type: 'post',
      //     headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      //     dataType: 'json',
      //     success: function (resp) {
      //         if(resp.status=='success'){
      //           addressFound = true;
      //           $(document).find('#mint-form').css('display','block');
      //           $(document).find('.metamask-section').css('display','none');
      //         }
      //         else{
      //           $(document).find('.metamask-section').css('display','none');
      //           $(document).find('.metamask-address-not-found').css('display','block');
                
      //           //$(document).find('.close-mint-form').trigger('click');
      //           //alert('Sorry! We have not found your address in our pre sale records');
      //         }
      //     },
      //     error: function(jqXHR, textStatus, errorThrown) {
      //         if (jqXHR.status == 500) {
      //             //toastr.error("API Server is down. Please try it in some time.", 'Api Error');
      //             console.log('Internal error: ' + jqXHR.responseText);
      //         } 
      //         else
      //         {
      //           console.log('Unexpected error.');
      //         }
      //     }
      //   })
    }
}
else{
  alert('MetaMask is not installed in your browser.');
}

let wait = false;
$(document).on('submit','#mint-form', async function(e){
    e.preventDefault();


    if(wait==true){
      return false;
    }

    if(addressFound==false){
      alert('Sorry! We have not found your address in our pre sale records.');
      return false;
    }
    
    (async () => {
      mode = await getMode();
    })()
    
    if(mode!=networkMode)
    {
      alert('Please change the network to ethereum '+networkMode+' network.');
      return false;
    }
    
    let totalEther = $(document).find('#total-ether').val();
    let legends = $(document).find('#legend-number').val();

    if(totalEther <=0 || legends <=0){
      alert('Please enter valid input.');
      return false;
    }

    amount = newWeb3.utils.toWei(totalEther, 'ether');
    let contract = new newWeb3.eth.Contract(abi, contractAddress);

    wait = true;

    const gasFee = await contract.methods.mintLegend(totalEther)
    .estimateGas({ from: senderEthereumAddress });

    const gasPrice = await newWeb3.eth.getGasPrice();
    const priorityFee = Number(gasPrice) + 5000000000; //adding 7Gwei
    const maxFee = 2 * gasPrice + priorityFee;


    $(document).find('.close-mint-form').trigger('click');

    contract.methods.mintLegend(totalEther)
    .send({
      from: senderEthereumAddress,
      gas: gasFee,
      gasPrice:gasPrice,
      maxFeePerGas: maxFee,
      maxPriorityFeePerGas: priorityFee,
      value: amount,
    })
    .on('transactionHash', (receipt) => {
        wait =false;
        //$(document).find('#mint-form-modal').modal('toggle');
        $(document).find('#Thankyou').modal('show');
        $(document).find('.repsonse-message').html('Thank You! <br><br>We have initiated token minting. Shortly you will receive LEGENDS at your metamask address.');
        
        $.ajax({
            url: baseUrl+"/notify-transaction",
            data: {'txn':receipt,'amount':amount,'legends':legends,'ether_address':senderEthereumAddress},
            type: 'post',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            dataType: 'json',
            success: function (resp) {
                console.log(resp);
                $(document).find('.response-msg').css('display','block');
                if(resp.status=='error'){
                  console.log(resp.message);
                }
                else{
                  console.log(resp.message);
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                if (jqXHR.status == 500) {
                    //toastr.error("API Server is down. Please try it in some time.", 'Api Error');
                    console.log('Internal error: ' + jqXHR.responseText);
                } 
                else
                {
                    //toastr.error("API Server is down. Please try it in some time.", 'Api Error');
                    console.log('Unexpected error.');
                }
            }
        })
        console.log(receipt);
    })
    .on('error', (error) => {
        wait =false;
        //$(document).find('#mint-form-modal').modal('toggle');
        $(document).find('#Thankyou').modal('show');
        $(document).find('.repsonse-message').html('Opps! <br><br>Transaction has been cancelled. Please try Again');
    });
})