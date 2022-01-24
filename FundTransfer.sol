//SPDX-License-Identifier: MIT
pragma solidity ^0.8.8;

contract FundTransfer{
    receive() external payable {}

      function sendViaSend(address payable _to) public payable {
        bool sent = _to.send(msg.value);
        require(sent, "Failed to send Ether");
    }
}
